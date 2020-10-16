<?php

if (! function_exists("assets"))
{
    function assets($path)
    {
        echo URL . "assets/web/$path";
    }
}


if (! function_exists("uploads"))
{
    function uploads($path)
    {
        echo URL."uploads/$path";
    }
}

if (! function_exists("url")){

    function url($path)
    {
        echo URL .$path;
    }
}

if (! function_exists("dd")){

    function dd()
    {
        echo "<pre style='background-color: black; height: 100%;border: solid red 3px'>";
           foreach ($_POST as $key => $value)
           {
               echo "<strong style='color: red;'> " . $key . ' => ' . '<bold style="color: white">'.$value .'</bold>'. "</strong>" . "<br>";
           }
        echo "</pre>";
    }
}


if (! function_exists("auth")){

    function auth()
    {
        return \Core\Auth::check();
    }
}



if (! function_exists("TimeHumans")){

    function TimeHumans($time)
    {
        $carbon = new \Carbon\Carbon;
        return $carbon->parse($time)->diffForHumans();
    }
}





























