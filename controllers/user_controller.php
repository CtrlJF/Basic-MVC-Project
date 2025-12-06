<?php
    require_once 'models/user.php';

    class UserController {
        private $user;

        public function __construct() {
            $this->user = new User();
        }

        public function index() {
            $users = $this->user->getAll();
            include 'views/users/index.php';
        }

        public function create() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $this->user->create($name, $email);
                $_SESSION['success'] = "User has been added successfully!";
                header("Location: index.php");
                exit;
            }
            include 'views/users/create.php';
        }

        public function edit($id) {
            $user = $this->user->getById($id);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $this->user->update($id, $name, $email);
                $_SESSION['success'] = "User has been edited successfully!";
                header("Location: index.php");
                exit;
            }
            include 'views/users/edit.php';
        }

        public function delete($id) {
            $this->user->delete($id);
            $_SESSION['success'] = "User has been deleted successfully!";
            header("Location: index.php");
            exit;
        }
    }
?>
