<?php

$session = new Core\Session;

$errors = [];

if($session->has("errors")) {
    $data = $session->flash('errors');
    foreach ($data as $key => $value){

        $first_name_of_error = strtok($value," ");
        $errors[$first_name_of_error] = $value;
    }
}

?>