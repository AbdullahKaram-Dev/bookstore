<?php

namespace Core\Validation\Rules;

class Size implements ValidationRule
{
    public $name,$value;

    public function __construct($name, $value)
    {
        $this->name  = $name;
        $this->value = $value;
    }

    public function validate()
    {
        if (! length($this->value,1000,5000000)){
            return "$this->name size not valid";
        }

        return "";
    }


}