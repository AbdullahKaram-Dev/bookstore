<?php

$session = new Core\Session;

if($session->has("success")) {
    $data = $session->flash('success');

    //echo "<div class='alert alert-success' role='alert'>" .$data . "</div>";

   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
         ".$data."
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
         </button>
        </div>";
}

?>