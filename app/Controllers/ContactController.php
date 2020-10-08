<?php

namespace App\Controllers;

use App\Models\Setting;
use Core\View;

class ContactController
{

    public function index()
    {
        $data['settings'] = Setting::connectTable()
                ->select("email,website,phone,address")
                ->getOne();

        View::load('web/contact',$data);
    }

}