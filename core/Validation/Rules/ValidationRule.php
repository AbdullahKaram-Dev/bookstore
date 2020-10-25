<?php

namespace Core\Validation\Rules;

interface ValidationRule
{

    public function __construct($name,$value,$param = null);

    public function validate();

}