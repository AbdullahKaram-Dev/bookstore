<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Cat;
use Carbon\Carbon;
use Core\Db;
use Core\Request;
use Core\View;

class BookController
{
    public function index($page)
    {

        $offset = ($page - 1) * PAGE_LENGTH;

        $data['page'] = $page;

        $books_total_num = Book::connectTable()
            ->select("COUNT(*) AS cnt")
            ->getOne()['cnt'];

        $data['pages_total_num'] = ceil($books_total_num / PAGE_LENGTH);

        if($page > $data['pages_total_num'] || $page == 0) {
            $request = new Request();
            $request->redirect("books/page/1");
        }


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
            ])->orderBy('book_id','ASC')->paginate(PAGE_LENGTH, $offset);

        View::load("web/books/index",$data);
    }


    public function show($id)
    {
        $data['books'] = Db::getInstance()->joinTables(['books','authors','cats'])
            ->selectMultiple([
                'books'=>['id','name','img','price','desc','created_at'],
                'authors'=>['id','name'],
                'cats'=>['id','name'],
            ])->on([
                ['books.author_id' , 'authors.id'],
                ['books.cat_id','cats.id'],
                ['books.id',"$id"],
            ])->getOne();


        View::load("web/books/Single_book",$data);

    }
}