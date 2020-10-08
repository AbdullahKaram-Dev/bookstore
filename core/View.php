<?php

namespace Core;


class View
{

    public static function load(string $path, array $data = [])
    {
        $file_path = VIEWS . "$path.php";
        if (file_exists($file_path)) {

            extract($data);
            ob_start();
            require_once $file_path;
            ob_end_flush();
        }
    }

}