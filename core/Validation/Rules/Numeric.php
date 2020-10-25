<?php

namespace Core\Validation\Rules;

class Numeric implements ValidationRule
{
    private $name , $value,$param;

    public function __construct($name, $value,$param = null)
    {
        $this->name  = $name;
        $this->value = $value;
        $this->param = $param;

    }

    public function validate()
    {
        if (! is_numeric($this->value)){
            return "$this->name must be numeric";
        } elseif (! length($this->value,10,1000)){
            return "$this->name must be valid number";
        }

        return "";
    }


}