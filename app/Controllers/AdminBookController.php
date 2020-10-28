<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Cat;
use Core\Db;
use Core\File;
use Core\Request;
use Core\Session;
use Core\Validation\Validator;
use Core\View;

class AdminBookController
{

    public function index()
    {
        $data['books'] = Db::getInstance()->joinTables(['books', 'authors', 'cats'])
            ->selectMultiple([
                'books' => ['id', 'name', 'img', 'price', 'desc'],
                'authors' => ['name'],
                'cats' => ['name'],
            ])->on([
                ['books.author_id', 'authors.id'],
                ['books.cat_id', 'cats.id'],
            ])->get();

        View::load('admin/book/index', $data);
    }

    public function create()
    {
        $data['authors'] = Author::connectTable()
            ->select('id,name')
            ->get();
        $data['cats'] = Cat::connectTable()
            ->select('id,name')
            ->get();
        View::load('admin/book/create', $data);

    }

    public function store()
    {
        $request = new Request;
        extract($_POST);
        $file = new File($_FILES['img']);

        $request_prepared = [
            [
                'name' => 'img',
                'value' => $file->imageSize,
                'rules' => 'min:500'
            ],
            [
                'name' => 'img',
                'value' => $file->imageType,
                'rules' => 'required|image|str'
            ],
            [
                'name' => 'name',
                'value' => $name,
                'rules' => 'required|str'
            ],
            [
                'name' => 'price',
                'value' => $price,
                'rules' => 'min:2'
            ],
            [
                'name' => 'desc',
                'value' => $desc,
                'rules' => 'required|str'
            ],
            [
                'name' => 'author_id',
                'value' => $author_id,
                'rules' => 'required'
            ],
            [
                'name' => 'cat_id',
                'value' => $cat_id,
                'rules' => 'required'
            ],
        ];

        $errors = Validator::make($request_prepared);

        if (!empty($errors)) {
            $session = new Session;
            $session->set("errors", $errors);
        } else {

            $file->rename('books')->upload('books');
            Book::connectTable()->insert([
                'name' => $name,
                'price' => $price,
                'desc' => $desc,
                'img' => $file->imageName,
                'author_id' => $author_id,
                'cat_id' => $cat_id,
            ])->save();
            $session = new Session;
            $session->set("success-message", "The process of adding a new book was successfully");
        }

        $request->redirect("dashboard/books/create");
    }

    public function delete($id)
    {
        $deleted = Book::connectTable()
            ->delete()->where('id', '=', $id)->saveAndGetStatus();
        if ($deleted) {
            $session = new Session;
            $session->set('success-message', 'Book deleted successfully');
        } else {
            $session = new Session;
            $session->set('error-message', 'We are sorry can\'t delete this book or it\'s not found');
        }

        $request = new Request;
        $request->redirect('dashboard/books');
    }

    public function show($id)
    {
        $data['books'] = Db::getInstance()->joinTables(['books', 'authors', 'cats'])
            ->selectMultiple([
                'books' => ['id', 'name', 'img', 'price', 'desc'],
                'authors' => ['name'],
                'cats' => ['name'],
            ])->on([
                ['books.id', "$id"],
                ['books.author_id', 'authors.id'],
                ['books.cat_id', 'cats.id'],
            ])->get();
        View::load('admin/book/single-book', $data);
    }

    public function edit($id)
    {
        $data['books'] = Db::getInstance()->joinTables(['books', 'authors', 'cats'])
            ->selectMultiple([
                'books' => ['id', 'name', 'img', 'price', 'desc'],
                'authors' => ['name'],
                'cats' => ['name'],
            ])->on([
                ['books.id', "$id"],
                ['books.author_id', 'authors.id'],
                ['books.cat_id', 'cats.id'],
            ])->get();

        View::load('admin/book/edit-book', $data);
    }

    public function update($id)
    {
        $request = new Request;
        extract($_POST);
        $file = new File($_FILES['img']);
        if (! empty($file->imageName)){

            $request_prepared = [
                [
                    'name' => 'name',
                    'value' => $name,
                    'rules' => 'required|str|min:5'
                ],
                [
                    'name' => 'price',
                    'value' => $price,
                    'rules' => 'required|str|min:10'
                ],
                [
                    'name' => 'desc',
                    'value' => $desc,
                    'rules' => 'required|str|min:50'
                ],
                [
                    'name' => 'author_id',
                    'value' => $author_id,
                    'rules' => 'required'
                ],
                [
                    'name' => 'cat_id',
                    'value' => $cat_id,
                    'rules' => 'required'
                ],

            ];

            $errors = Validator::make($request_prepared);

            if (!empty($errors)) {
                $session = new Session;
                $session->set("errors", $errors);
                $request->redirect("dashboard/books/edit/$id");

            } else {

                $file->rename('book')->upload('books');
                $data = [
                    'name'      => $name,
                    'desc'      => $desc,
                    'price'     => $price,
                    'img'       => $file->imageName,
                    'author_id' => $author_id,
                    'cat_id'    => $cat_id
                ];

                Book::connectTable()
                    ->update($data)
                    ->where('id','=',$id)
                    ->save();

                $session = new Session;
                $session->set("update-message","Book Updated Successfully");
                $request->redirect("dashboard/books/show/$id");

            }
        } else {

            $request_prepared = [
                [
                    'name' => 'name',
                    'value' => $name,
                    'rules' => 'required|str|min:5'
                ],
                [
                    'name' => 'price',
                    'value' => $price,
                    'rules' => 'required|str|min:10'
                ],
                [
                    'name' => 'desc',
                    'value' => $desc,
                    'rules' => 'required|str|min:50'
                ],
                [
                    'name' => 'author_id',
                    'value' => $author_id,
                    'rules' => 'required'
                ],
                [
                    'name' => 'cat_id',
                    'value' => $cat_id,
                    'rules' => 'required'
                ],

            ];

            $errors = Validator::make($request_prepared);

            if (!empty($errors)) {
                $session = new Session;
                $session->set("errors", $errors);
                $request->redirect("dashboard/books/edit/$id");
            } else {

                $data = [
                    'name'      => $name,
                    'desc'      => $desc,
                    'price'     => $price,
                    'author_id' => $author_id,
                    'cat_id'    => $cat_id
                ];


                Book::connectTable()
                    ->update($data)
                    ->where('id','=',$id)
                    ->save();

                $session = new Session;
                $session->set("update-message","Book Updated Successfully");
                $request->redirect("dashboard/books/show/$id");

            }
        }




    }

}