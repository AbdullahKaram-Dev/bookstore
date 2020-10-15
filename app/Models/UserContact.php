<?php

namespace App\Models;
use Core\Db;

class UserContact
{
    public static function connectTable()
    {
        return Db::getInstance()->table("user_contacts");
    }
}