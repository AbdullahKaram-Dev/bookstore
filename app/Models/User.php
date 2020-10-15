<?php

namespace App\Models;
use Core\Db;

class User
{
    public static function connectTable()
    {
        return Db::getInstance()->table("users");
    }
}