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








































