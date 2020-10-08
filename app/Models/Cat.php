<?php

namespace App\Models;
use Core\Db;

class Cat
{
    public static function connectTable()
    {
        return Db::getInstance()->table("cats");
    }
}