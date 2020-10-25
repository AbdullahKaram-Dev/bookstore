<?php

namespace Core\Validation;

class Validator
{
public static function make(array $request)
{
    $errors = [];

    foreach ($request as $input) {
        $name = $input['name'];
        $value = $input['value'];
        $rules = explode("|", $input['rules']);

        foreach ($rules as $rule) {

            if(preg_match_all('/min:[\d]+/', $input['rules'], $result)) {

                $stringResult = implode(':', $result[0]);
                $classAndPARAM = explode(':', $stringResult);
                $className = $classAndPARAM[0];
                $param = $classAndPARAM[1];

                $validation_rule_class_name = 'Core\Validation\Rules\\' . ucfirst($className);
                $error = (new ValidationStrategy(new $validation_rule_class_name($name, $value, $param)))->validate();

                if (!empty($error)) {
                    $errors[] = $error;

                }
            }else{

                $validation_rule_class_name = 'Core\Validation\Rules\\' . ucfirst($rule);
                $error = (new ValidationStrategy(new $validation_rule_class_name($name, $value)))->validate();

                if (!empty($error)) {
                    $errors[] = $error;
                    break;
                }

            }

        }
    }

    return $errors;
}
}