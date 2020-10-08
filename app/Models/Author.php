<?php

namespace App\Models;
use Core\Db;

class Author
{
    public static function connectTable()
    {
        return Db::getInstance()->table("authors");
    }
}