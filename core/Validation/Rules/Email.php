<?php

namespace Core\Validation\Rules;

class Email implements ValidationRule
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
        if (! filter_var($this->value,FILTER_VALIDATE_EMAIL)){
            return "$this->name must be valid emil";
        }

        return "";
    }


}