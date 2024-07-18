<?php
    require 'models/User.php';

    class AuthController {
        private $db;
        private $user;

        public function __construct(PDO $conn)
        {
            $this->db = $conn;
            $this->user = new User($this->db);
        }

        public function register($payload){
            $this->user->name = $payload['name'];
            $this->user->username = $payload['username'];
            $this->user->email = $payload['email'];
            $this->user->password = $payload['password'];
            $this->user->profile = $payload['profile'];

            if ($this->user->register()) {
                echo 'Account Successfully Registered';
            }
            else{
                echo 'Connection Error';
            }
        }

        public function login($payload){
            $this->user->name = $payload['name'];
            $this->user->username = $payload['username'];

            if ($this->user->login()) {
                echo 'Login Successfully';
            }
            else{
                echo 'Connection Error';
            }
        }
    }