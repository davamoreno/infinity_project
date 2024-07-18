<?php
    require 'config/Database.php';
    $database = new Database();
    $database->connect();
    
    //
    require "views/login.view.php";
?>