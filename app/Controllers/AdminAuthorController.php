<?php

namespace App\Controllers;

use App\Models\Author;
use Core\View;

class AdminAuthorController
{
    public function index()
    {
        $data['authors'] = Author::connectTable()
                        ->select()
                        ->get();

        View::load('admin/author/index',$data);
    }

}