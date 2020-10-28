<?php

namespace App\Controllers;

use App\Models\Cat;
use Core\Request;
use Core\Session;
use Core\View;

class AdminCategoryController
{

    public function index()
    {
        $data['categories'] = Cat::connectTable()
                        ->select('id,name,brief,is_top')
                        ->get();

        View::load('admin/category/index',$data);
    }

    public function changeStatusCategory($id,$status)
    {
        $request = new Request;
        $session = new Session;

        if (!empty($id) && ! empty($status) && $status == 'active'){
            $data = ['is_top' => '1'];
            Cat::connectTable()
                ->update($data)
                ->where('id','=',$id)
                ->save();

            $session->set('status-success','status category changed successfully to active');
            $request->redirect('dashboard/categories');

        } elseif (!empty($id) && ! empty($status) && $status == 'inactive') {

            $data = ['is_top' => '0'];
            Cat::connectTable()
                ->update($data)
                ->where('id','=',$id)
                ->save();
            $session->set('status-success','status category changed successfully to inactive');
            $request->redirect('dashboard/categories');
        }

        $request->redirect('dashboard/categories');
    }

    public function show($id)
    {
        $data['categories'] = Cat::connectTable()
                        ->select()
                        ->where('id','=',$id)
                        ->get();

        View::load('admin/category/single-category',$data);
    }

    public function edit($id)
    {
       $data['categories'] = Cat::connectTable()
                        ->select('id,name,brief,is_top')
                        ->where('id','=',$id)
                        ->get();
       View::load('admin/category/edit-category',$data);
    }

    public function update($id)
    {
        echo "we will update isa category $id tomorrow";
    }

}