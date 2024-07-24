<?php 

class HomeController {
    public function index() {
        require 'views/index.view.php';
    }
    public function doLogin() {
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
    }
    public function login() {
        if (isset($_SESSION['id'])) {
            header("Location: /");
            exit;
        }
        require 'views/login.view.php';
    }
    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        
            $auth = new AuthController($this->db);
            
            $payload = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'profile' => $_FILES['profile']
            ];

            // var_dump($payload);die;
            $auth->register($payload);
            header("location: /login");
            
        }
        require 'views/signup.view.php';
    }
    public function logout() {
        $auth = new AuthController($this->db);
        $auth->logout();
        header("Location: /");
        exit;
    }
    public function about(){
        require 'views/about.view.php';
    }
    public function services() {
        require 'views/services.view.php';
    }

    public function webDevelopment() {
        require 'views/pages/services/webDev.php';
    }

    public function itConsultant() {
        require 'views/pages/services/itConsul.php';
    }

    public function mobileAppsDevelopment() {
        require 'views/pages/services/mobile.php';
    }
}
class UserController {
    public function profile(){  
        $model = new User($this->db);
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit;
        }

        $user = $model->getUserById($_SESSION['id']);
        if (!$user) {
            echo "User not found.";
            exit;
        }
        require 'views/profile.view.php';
    }
    public function comments(){
        require 'views/comments.view.php';
    }
    public function edit(){
        $model = new User($this->db);
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit;
        }

        $user = $model->getUserById($_SESSION['id']);
        if (!$user) {
            echo "User not found.";
            exit;
        }
        require 'views/edit.view.php';
    }
}