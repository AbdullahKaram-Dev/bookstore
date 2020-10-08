<?php

namespace App\Models;
use Core\Db;

class Order
{
    public static function connectTable()
    {
        return Db::getInstance()->table("orders");
    }
}