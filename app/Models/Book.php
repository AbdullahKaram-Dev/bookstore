<?php

namespace App\Models;
use Core\Db;

class Book
{
    public static function connectTable()
    {
        return Db::getInstance()->table("books");
    }
}