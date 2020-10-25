<?php

namespace App\Controllers;

use Core\View;

class AdminHomeController
{
    public function index()
    {
        View::load('admin/index');
    }

}