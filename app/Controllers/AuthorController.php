<?php

namespace App\Controllers;

use App\Models\Author;
use Core\View;

class AuthorController
{
    public function index()
    {
       $data['authors'] = Author::connectTable()
            ->select()
            ->get();
       /*
       echo "<pre>";
         print_r($data['authors']);
       echo "<pre>";
       die();*/

       View::load('web/authors/index',$data);
    }

}