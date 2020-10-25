<?php

namespace Core\Validation\Rules;

class Str implements ValidationRule
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
        if (! is_string($this->value)){
            return "$this->name must be string";
        }

        return "";
    }


}