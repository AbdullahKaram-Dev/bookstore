<?php

namespace App\Models;
use Core\Db;

class Message
{
    public static function connectTable()
    {
        return Db::getInstance()->table("messages");
    }
}

