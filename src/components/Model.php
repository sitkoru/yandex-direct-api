<?php

namespace directapi\components;

use directapi\exceptions\UnknownPropertyException;
use JsonSerializable;

class Model implements JsonSerializable
{
    /**
     * Массив имён nillable свойств модели
     *
     * @var string[]
     */
    protected static $nillableProperties = [];

    /**
     * Карта nillable свойств, которым задали null
     *
     * @var bool[]
     */
    protected $nullPropertiesMap = [];

    /**
     * Model constructor.
     *
     * @param array $config
     *
     * @throws UnknownPropertyException
     */
    public function __construct(array $config = [])
    {
        if (\count($config) > 0) {
            foreach ($config as $name => $value) {
                if (property_exists(static::class, $name)) {
                    $this->$name = $value;
                } else {
                    throw new UnknownPropertyException('Свойство ' . $name . ' не существует в классе ' . static::class);
                }
            }
        }
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return null;
    }

    /**
     * Установить значение null для свойства. Дополнительно заносит свойство в список
     *
     * @param string $name
	 *
     * @throws UnknownPropertyException
     */
    public function setNullProperty(string $name)
    {
        if (!property_exists(static::class, $name)) {
            throw new UnknownPropertyException('Свойство ' . $name . ' не существует в классе ' . static::class);
        }

        if (in_array($name, static::$nillableProperties, true)) {
            $this->$name = null;
            $this->nullPropertiesMap[$name] = true;
        } else {
            throw new UnknownPropertyException('Свойство ' . $name . ' не определено как nillable в классе ' . static::class);
        }
    }

    public function jsonSerialize()
    {
        $result = new \stdClass();
        foreach ($this as $name => $value) {
            if ($name == 'nullPropertiesMap') continue;

            $is_array = is_array($value);
            if (($is_array && \count($value) !== 0) || (!$is_array && $value !== null) || ($this->nullPropertiesMap[$name] ?? false)) {
                $result->$name = $value;
            }
        }

        return $result;
    }
}
