<?php
require 'models/User.php';

class AuthController {
    private $db;
    private $user;

    public function __construct(PDO $conn) {
        $this->db = $conn;
        $this->user = new User($this->db);
    }

    public function register($payload) {
        $this->user->name = $payload['name'];
        $this->user->username = $payload['username'];
        $this->user->email = $payload['email'];
        $this->user->password = $payload['password'];
        $this->user->profile = $payload['profile'];

        if ($this->user->register()) {
            echo 'Account Successfully Registered';
        } else {
            echo 'Error: Account could not be registered';
        }
    }

    public function login($payload) {
        $this->user->username = $payload['username'];
        $this->user->password = $payload['password'];

        if ($this->user->login()) {
            $_SESSION['id'] = $this->user->id;
            return true;
        }

        return false;
    }

    public function logout(){
        session_destroy();
        unset($_SESSION['id']);

    }
}