<?php

namespace App\Controllers;

use Core\Db;
use Core\View;

class CategoryController
{

    public function showBooksCategory($id)
    {
        $data['books'] = Db::getInstance()->joinTables(['books','authors','cats'])
            ->selectMultiple([
                'books'=>['id','name','img','price','desc','created_at'],
                'authors'=>['id','name'],
                'cats'=>['id','name'],
            ])->on([
                ['books.author_id' , 'authors.id'],
                ['books.cat_id','cats.id'],
                ['books.cat_id',"$id"],
            ])->get();

       View::load('web/category/books_category',$data);
    }

}