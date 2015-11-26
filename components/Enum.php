<?php

namespace directapi\components;


use directapi\exceptions\EnumException;
use ReflectionClass;

abstract class Enum
{
    private $current_val;

    public static $prefix;

    final public function __construct($type)
    {
        $class_name = get_class($this);

        if (static::$prefix) {
            $type = static::$prefix . '_' . $type;
        }

        $type = strtoupper($type);
        if (constant("{$class_name}::{$type}") === null) {
            throw new EnumException('Свойства ' . $type . ' в перечислении ' . $class_name . ' не найдено.');
        }

        $this->current_val = constant("{$class_name}::{$type}");
    }

    final public function __toString()
    {
        return $this->current_val;
    }

    final public static function getValues()
    {
        $class = new ReflectionClass(static::class);
        return array_values($class->getConstants());
    }

    final public static function check(array $arr)
    {
        $values = static::getValues();
        foreach ($arr as $value) {
            if (!in_array($value, $values)) {
                return false;
            }
        }
        return true;
    }
}