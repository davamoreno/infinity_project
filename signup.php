<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        require "config/Database.php";
        require "controllers/AuthController.php";
    
        $database = new Database();
        $user = new AuthController($database->connect());
        $payload = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'profile' => ''
        ];
        $user->register($payload);
    }
    require "views/signup.view.php";
?>