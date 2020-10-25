<?php

namespace Core\Validation\Rules;

class Required implements ValidationRule
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
        if (strlen($this->value) === 0){
            return "$this->name is required";
        }

        return "";
    }


}