<?php

namespace App\Controllers;

use App\Models\Setting;
use Core\View;
use Core\Request;
use Core\Validation\Validator;
use Core\Session;
use App\Models\Message;

class ContactController
{

    public function index()
    {
        $data['settings'] = Setting::connectTable()
                ->select("email,website,phone,address,map")
                ->getOne();

        View::load('web/contact/index',$data);
    }

    public function send()
    {

        // reading request data (Todo: refactor)
        $request = new Request;
        extract($_POST);

        // validation
        $request_prepared = [
            [
                'name' => 'name',
                'value' => $name,
                'rules' => 'required|str'
            ],
            [
                'name' => 'email',
                'value' => $email,
                'rules' => 'required|email'
            ],
            [
                'name' => 'subject',
                'value' => $subject,
                'rules' => 'required|str'
            ],
            [
                'name' => 'message',
                'value' => $message,
                'rules' => 'required|str'
            ],
        ];

        $errors = Validator::make($request_prepared);

        if(! empty($errors)) {
            $session = new Session;
            $session->set("errors", $errors);
        } else {
            Message::connectTable()->insert([
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
            ])->save();
        }

        $request->redirect("contact-us");
    }
}