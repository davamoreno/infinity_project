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
        $this->user->profile = $this->userProfile();

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

    public function userProfile(){
        if (!isset($_FILES['profile'])) {
            echo "No file uploaded.";
            return false;
        }
        $nameFile = $_FILES['profile']['name'];
        $typeFile = $_FILES['profile']['type'];
        $sizeFile = $_FILES['profile']['size'];
        $errorFile = $_FILES['profile']['error'];
        $pathFile = $_FILES['profile']['tmp_name'];
    
        if ($errorFile === 4) {
            echo "No Image Uploaded";
            return false;
        }
    
        $validFileTypes = [ 'image/jpg','image/jpeg', 'image/png', 'image/gif'];
    
        if (!in_array($typeFile, $validFileTypes)) {
            echo "Invalid file type";
            return false;
        }
    
        if ($sizeFile > 2 * 1024 * 1024) {
            echo "File size too large";
            return false;
        }
    
        $newNameFile = uniqid() . '.' . pathinfo($nameFile, PATHINFO_EXTENSION);
    
        $uploadDir = 'assets/uploads/user/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $uploadPath = $uploadDir . $newNameFile;
    
        if (move_uploaded_file($pathFile, $uploadPath)) {
            return $uploadPath;
        } else {
            echo "Failed to upload file";
            return false;
        }
    }
}