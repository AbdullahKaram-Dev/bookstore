<?php

namespace App\Controllers;

use App\Models\Cat;
use Core\Request;
use Core\Session;
use Core\Validation\Validator;
use Core\View;

class AdminCategoryController
{

    public function index()
    {
        $data['categories'] = Cat::connectTable()
            ->select('id,name,brief,is_top')
            ->get();

        View::load('admin/category/index', $data);
    }

    public function changeStatusCategory($id, $status)
    {
        $request = new Request;
        $session = new Session;

        if (!empty($id) && !empty($status) && $status == 'active') {
            $data = ['is_top' => '1'];
            Cat::connectTable()
                ->update($data)
                ->where('id', '=', $id)
                ->save();

            $session->set('status-success', 'status category changed successfully to active');
            $request->redirect('dashboard/categories');

        } elseif (!empty($id) && !empty($status) && $status == 'inactive') {

            $data = ['is_top' => '0'];
            Cat::connectTable()
                ->update($data)
                ->where('id', '=', $id)
                ->save();
            $session->set('status-success', 'status category changed successfully to inactive');
            $request->redirect('dashboard/categories');
        }

        $request->redirect('dashboard/categories');
    }

    public function show($id)
    {
        $data['categories'] = Cat::connectTable()
            ->select()
            ->where('id', '=', $id)
            ->get();

        View::load('admin/category/single-category', $data);
    }

    public function edit($id)
    {
        $data['categories'] = Cat::connectTable()
            ->select('id,name,brief,is_top')
            ->where('id', '=', $id)
            ->get();
        View::load('admin/category/edit-category', $data);
    }

    public function update($id)
    {
        $session = new Session;
        $request = new Request;

        extract($_POST);
        $request_prepared = [
            [
                'name' => 'name',
                'value' => $name,
                'rules' => 'required|str|min:5'
            ],
            [
                'name' => 'brief',
                'value' => $brief,
                'rules' => 'required|str|min:5'
            ],
            [
                'name' => 'is_top',
                'value' => $is_top,
                'rules' => 'required'
            ]
        ];


        $errors = Validator::make($request_prepared);
        if (!empty($errors)) {
            $session->set('errors', $errors);
            $request->redirect("dashboard/category/edit/" . $id);

        } else {

            $data = [
                'name' => $name,
                'brief' => $brief,
                'is_top' => $is_top
            ];

            Cat::connectTable()
                ->update($data)
                ->where('id', '=', $id)
                ->save();

            $session->set('update-message', "Category Updated Successfully");
            $request->redirect("dashboard/category/show/" . $id);
        }


    }

    public function delete($id)
    {
       $deleted = Cat::connectTable()
            ->delete()
            ->where('id','=',$id)
            ->saveAndGetStatus();

        if ($deleted) {
            $session = new Session;
            $session->set('success-message', 'Category deleted successfully');
        } else {
            $session = new Session;
            $session->set('error-message', 'We are sorry can\'t delete this category or it\'s not found');
        }

        $request = new Request;
        $request->redirect('dashboard/categories');
    }

    public function create()
    {
        View::load('admin/category/create');
    }

    public function store()
    {
        $session = new Session;
        $request = new Request;
        extract($_POST);

        $request_prepared = [

            [
              'name'=>'name',
              'value'=>$name,
              'rules'=>'required|str|min:5'
            ],
            [
                'name'=>'brief',
                'value'=>$brief,
                'rules'=>'required|str|min:10'
            ],
            [
                'name'=>'is_top',
                'value'=> $is_top,
                'rules'=>'required'
            ],
        ];

        $errors = Validator::make($request_prepared);
        if (! empty($errors)){

            $session->set('errors',$errors);
            $request->redirect('dashboard/category/create');
        } else {

            $data = [
                'name'=> $name,
                'brief'=> $brief,
                'is_top'=> $is_top
            ];

            $create = Cat::connectTable()
                     ->insert($data)
                     ->saveAndGetStatus();

            if ($create) {
                $session->set('success-message', 'Create Category successfully');
            } else {
                $session->set('error-message', 'We are sorry can\'t create category now we will solve this problem soon');
            }


            $request->redirect('dashboard/categories');

        }













    }
}