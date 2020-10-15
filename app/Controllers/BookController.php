<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Cat;
use Core\Db;
use Core\View;

class BookController
{
    public function index()
    {
        $data['categories'] = Cat::connectTable()
            ->select()
            ->get();

        $data['authors'] = Author::connectTable()
            ->select("id,name")
            ->where("is_top","=",1)
            ->get();

        $data['books'] = Db::getInstance()->joinTables(['books','authors'])
            ->selectMultiple([
                'books'=>['id','name','img','price','desc'],
                'authors'=>['id','name'],
            ])->on([
                ['books.author_id' , 'authors.id'],
            ])->get();

        View::load("web/books/index",$data);
    }

}