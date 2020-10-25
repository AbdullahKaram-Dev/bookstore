<?php

namespace App\Middleware;
use Core\Auth;

class AdminAuth
{
    public static function handle($request)
    {
        if (! Auth::check()){
            $request->redirect('login');
            die();
        } elseif ($_SESSION['logged_user']['is_admin'] != true){
            $request->redirect('');
        }
    }

}