<?php
    if(empty($_POST["fullname"])){
        die("Full name required");

    }
    if( ! filter_var($_POST["email"])){
        die("Valid Email required");
    }

    $password_hash=password_hash ($_POST["pass"], PASSWORD_DEFAULT);
   
    print_r($_POST);

?>