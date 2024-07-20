<?php 
class User {
    private $conn;
    private $table = 'user';

    public $id;
    public $name;
    public $username;
    public $email;
    public $password;
    public $profile;
    public $role_id = 2;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register() {

        $query = 'INSERT INTO ' . $this->table . ' (name, username, email, password, profile, role_id) 
                                                VALUES (:name, :username, :email, :password, :profile, :role_id)';
        $stmt = $this->conn->prepare($query);
        
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->profile = htmlspecialchars(strip_tags($this->profile));

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':profile', $this->profile);
        $stmt->bindParam(':role_id', $this->role_id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function login(){
        $query = 'SELECT id, name, username, email, password, profile, role_id FROM ' . $this->table . ' WHERE username = :username';
        $stmt = $this->conn->prepare($query);

        $this->username = htmlspecialchars(strip_tags($this->username));
        $stmt->bindParam(':username', $this->username);

        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($this->password, $row['password'])) {
                $this->id = $row['id'];
                $this->name = $row['name'];
                $this->username = $row['username'];
                $this->email = $row['email'];
                $this->profile = $row['profile'];
                $this->role_id = $row['role_id'];
                return true;
            }
        }
        return false;
    }
}