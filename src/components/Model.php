<?php

namespace directapi\components;

use directapi\exceptions\UnknownPropertyException;

class Model
{
    public function __construct($config = [])
    {
        if (!empty($config)) {
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
    public function getDescription()
    {
        return null;
    }
}