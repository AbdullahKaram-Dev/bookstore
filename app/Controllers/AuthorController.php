<?php

namespace App\Controllers;

use App\Models\Author;
use Core\Db;
use Core\View;

class AuthorController
{
    public function index()
    {
       $data['authors'] = Author::connectTable()
            ->select()
            ->get();

       View::load('web/authors/index',$data);
    }


    public function showBooks($id)
    {
        $data['author'] = Author::connectTable()
                    ->select()
                    ->where("id","=",$id)
                    ->get();

        $data['books'] = Db::getInstance()->joinTables(['books','authors'])
            ->selectMultiple([
                'books'=>['id','name','img','price','desc','created_at'],
            ])->on([
                ["authors.id",'books.author_id'],
                ['authors.id',"$id"],
            ])->get();

        View::load('web/authors/single_author_books',$data);
    }


}