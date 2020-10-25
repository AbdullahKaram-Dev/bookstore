<?php

namespace Core\Validation\Rules;

class Password implements ValidationRule
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
        $pattern = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.-_@#%]).{8,50}$/';
        if (! preg_match($pattern,$this->value)){
            return "$this->name should contain at least digit , lowercase , uppercase and special char";
        }

        return "";
    }
}