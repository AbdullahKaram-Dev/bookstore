<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Cat;
use Core\View;

class BookController
{
    public function index()
    {
        $data['books'] = Book::connectTable()
                ->select("id,name,img,price,`desc`")
                ->get();

        $data['categories'] = Cat::connectTable()
                ->select()
                ->get();

        $data['authors'] = Author::connectTable()
                ->select("id,name")
                ->where("is_top","=",1)
                ->get();

        View::load("web/books/index",$data);
    }

}