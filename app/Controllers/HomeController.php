<?php

namespace App\Controllers;

use App\Models\Cat;
use App\Models\Book;
use Core\View;

class HomeController
{

    public function index()
    {
        $data['top_cats'] = Cat::connectTable()
                ->select("id,name,brief")
                ->where("is_top","=",1)
                ->get();

        $data['new_books'] = Book::connectTable()
            ->select("id,img,name,price")
            ->orderBy("created_at","desc")
            ->limit(6)
            ->get();


        View::load("web/index",$data);
    }

}