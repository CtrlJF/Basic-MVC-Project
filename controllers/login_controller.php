<?php
require_once 'models/login.php';

class LoginController {
    private $login;

    public function __construct() {
        $this->login = new Login();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['email'];
            $user = $this->login->authenticate($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                $_SESSION['info'] = "Welcome " . $user['name'] . "!";
                header("Location: index.php");
                exit;
            } else {
                $_SESSION['error'] = "Invalid username or password!";
            }
        }
        include "views/login/login.php";
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?module=login&action=login");
        exit;
    }
}
