<?php

namespace Core;

class Request
{

    public function get(string $key, $value = null)
    {
        return $_GET[$key] = ($value) ? $value : (isset($_GET[$key]) ? $_GET[$key] : $value);
    }

    public function post(string $key, $value = null)
    {
        return $_POST[$key] = ($value) ? $value : (isset($_POST[$key]) ? $_POST[$key] : $value);
    }

    public function cookie(string $key, $value = null)
    {
        return $_COOKIE[$key] = ($value) ? $value : (isset($_COOKIE[$key]) ? $_COOKIE[$key] : $value);
    }

    public function server(string $key)
    {
        return $_SERVER[$key];
    }

    public function serverAll()
    {
        foreach ($_SERVER as $key => $value) {

            echo "
            <!DOCTYPE html>
            <html>
            
               <head>
                  <title>HTML Tables</title>
               </head>
                
               <body>
                  <table border style='width: 50%;background-color: black;' = \"1\">
                     <tr>
                        <td style='background-color: white;text-align: center'><b>key</b></td>
                        <td style='background-color: white;text-align: center'><b>value</b></td>
                     </tr>
                     
                     <tr>
                        <td style='background-color: blue;max-width: 50%'>$key</td>
                        <td style='background-color: white;max-width: 50%'>".substr($value,0,150)."</td>
                     </tr>
                  </table>
                  
               </body>
            </html>";
        }
    }


    public function redirect($path)
    {
        header("location:" . URL . $path);
    }

    public function back()
    {
        header("location:" . $this->server('HTTP_REFERER'));
    }
}