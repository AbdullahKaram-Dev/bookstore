<?php

namespace App\Models;
use Core\Db;

class Setting
{
    public static function connectTable()
    {
        return Db::getInstance()->table("settings");
    }
}