<?php

namespace App\Controllers;

use App\Models\Cat;
use App\Models\Book;
use App\Models\Setting;
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

            ->joinTables(['books','authors'])
            ->selectMultiple([
                'books'=>['id','name','img','price'],
                'authors'=>['name'],])
            ->on([
                ['books.author_id','authors.id']])
            ->limit(6)->get();
        $data['setting'] = Setting::connectTable()
                ->select()
                ->getOne();

        View::load("web/home/index",$data);
    }

}