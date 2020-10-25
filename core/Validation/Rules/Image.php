<?php

namespace Core\Validation\Rules;

class Image implements ValidationRule
{
    public $name,$value;

    public function __construct($name, $value)
    {
        $this->name  = $name;
        $this->value = $value;
    }

    public function validate()
    {
        if ($this->value != 'image'){
            return "$this->name not valid";
        }

        return "";
    }

}