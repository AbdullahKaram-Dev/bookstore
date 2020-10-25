<?php

namespace Core\Validation\Rules;

class Image implements ValidationRule
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
        if ($this->value != 'image'){
            return "$this->name not valid";
        }

        return "";
    }

}