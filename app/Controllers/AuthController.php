<?php

namespace App\Controllers;

use App\Middleware\UserAuth;
use App\Models\UserContact;
use Core\Auth;
use Core\View;
use Core\Request;
use Core\Validation\Validator;
use Core\Session;
use App\Models\User;

class AuthController
{

    public function register()
    {
        View::load('web/auth/register');
    }

    public function doRegister()
    {
        $request = new Request;
        $session = new Session;

        extract($_POST);

        $request_prepared = [
            [
                'name' => 'username',
                'value' => $username,
                'rules' => 'required|str'
            ],
            [
                'name' => 'email',
                'value' => $email,
                'rules' => 'required|email'
            ],
            [
                'name' => 'password',
                'value' => $password,
                'rules' => 'required|password'
            ],
            [
                'name' => 'phone',
                'value' => $phone,
                'rules' => 'required|str'
            ],
            [
                'name' => 'address',
                'value' => $address,
                'rules' => 'required|str'
            ],
        ];

        $errors = Validator::make($request_prepared);

        if (!empty($errors)) {
            $session->set("errors", $errors);
            $request->redirect("register");

        } else {

            Auth::insertAndLogin($username, $email, $password, $phone, $address);
        }

    }

    public function login()
    {
       View::load('web/auth/login');
    }

    public function doLogin()
    {
        $request = new Request;
        $session = new Session();
        extract($_POST);

        $request_prepared = [
            [
                'name' => 'email',
                'value' => $email,
                'rules' => 'required|email'
            ],
            [
                'name' => 'password',
                'value' => $password,
                'rules' => 'required'
            ],
        ];

        $errors = Validator::make($request_prepared);

        if (!empty($errors)) {
            $session->set("errors", $errors);
            $request->redirect("login");

        } else {

            Auth::attempt($email, $password);
        }

    }

    public function logout()
    {
        Auth::logout();
    }
}