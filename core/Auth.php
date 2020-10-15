<?php

namespace Core;

use App\Models\User;
use App\Models\UserContact;

class Auth
{

    public static function attempt(string $email, string $password)
    {
        $session = new Session();
        $request = new Request();

        $user = User::connectTable()->select()
            ->where('email','=',$email)
            ->getOne();
        if ($user) {

            $db_password = $user['password'];
            $is_valid = password_verify($password,$db_password);
            if ($is_valid) {

                $session->set('logged_user',$user);
                $request->redirect("");

            } else {
                $errors['password'] = 'password not correct'; /*   أسم الايرور يجب ان يكون فى بداية جملة الايرور */
                $session->set("errors",$errors);
                $request->redirect("login");
            }
        } else {
            $errors['email'] = 'email not correct';
            $session->set("errors",$errors);
            $request->redirect("login");
        }

    }

    public static function insertAndLogin(string $username,string $email,string $password,string $phone,string $address)
    {
        $session = new Session();
        $request = new Request();

        $user_id = User::connectTable()->insert([
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ])->saveAndGetId();

        UserContact::connectTable()->insert([
            'user_id' => $user_id,
            'phone' => $phone,
            'address' => $address,
        ])->save();

        $user = User::connectTable()
            ->select()
            ->where('id', '=', $user_id)
            ->getOne();
        $session->set('logged_user', $user);

        $request->redirect("");
    }

    public static function logout()
    {
        $request = new Request;
        $session = new Session();
        $session->remove('logged_user');
        $request->redirect('');
    }

    public static function check()
    {
      $session = new Session();
      return $session->has('logged_user');
    }

}