<?php
require_once 'config/database.php';

class Login {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function authenticate($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE name = :name");
        $stmt->bindParam(':name', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && $password === $user['email']) { /* password_verify($password, $user['email']) */
            return $user;
        }
        return false;
    }
}
