<?php

namespace directapi\components;


use directapi\exceptions\EnumException;
use JsonSerializable;
use ReflectionClass;

abstract class Enum implements JsonSerializable
{
    /**
     * @var string
     */
    public static $prefix;
    /**
     * @var mixed
     */
    private $current_val;

    /**
     * Enum constructor.
     * @param $type
     * @throws EnumException
     */
    final public function __construct(string $type)
    {
        $class_name = \get_class($this);

        if (static::$prefix) {
            $type = static::$prefix . '_' . $type;
        }

        $type = strtoupper($type);
        if (\constant("{$class_name}::{$type}") === null) {
            throw new EnumException('Свойства ' . $type . ' в перечислении ' . $class_name . ' не найдено.');
        }

        $this->current_val = \constant("{$class_name}::{$type}");
    }

    /**
     * @param array $arr
     * @return bool
     * @throws \ReflectionException
     */
    final public static function check(array $arr): bool
    {
        $values = static::getValues();
        foreach ($arr as $value) {
            if (!\in_array($value, $values, true)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    final public static function getValues(): array
    {
        $class = new ReflectionClass(static::class);
        return array_values($class->getConstants());
    }

    final public function __toString()
    {
        return (string)$this->current_val;
    }

    /**
     * @param mixed $value
     * @return bool
     */
    final public function compare($value): bool
    {
        return $value === $this->current_val;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        return $this->current_val;
    }
}