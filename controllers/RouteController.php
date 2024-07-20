<?php 

    class HomeController {
        public function index() {
            require 'views/index.view.php';
        }

        public function login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $auth = new AuthController($this->db);

                $payload = [
                    'username' => $username,
                    'password' => $password];

                if ($auth->login($payload)) {
                    header("Location: /");
                    exit;
                } else {
                    $errorMessage = "Invalid credentials. Please try again.";
                    require 'views/login.view.php';
                }
            } else {
                require 'views/login.view.php';
            }
        }

        public function signup() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            
                $auth = new AuthController($this->db);
                
                $payload = [
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'profile' => ''
                ];
                // var_dump($_POST);die;
                $auth->register($payload);
                
            }

            require 'views/signup.view.php';
        }

        public function logout() {
            $auth = new AuthController($this->db);
            $auth->logout();
            header("Location: /");
            exit;
        }
    }   