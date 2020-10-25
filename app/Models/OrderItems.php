<?php

namespace App\Models;
use Core\Db;

class OrderItems
{
    public static function connectTable()
    {
        return Db::getInstance()->table('order_items');
    }

}