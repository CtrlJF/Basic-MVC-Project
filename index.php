<?php
    session_start();    
    
    $module = $_GET['module'] ?? 'users';   // default: users
    $action = $_GET['action'] ?? 'index';
    $id     = $_GET['id'] ?? null;

    // If not logged in AND not accessing login page → redirect
    if (!isset($_SESSION['user']) && $module !== 'login') {
        header("Location: index.php?module=login&action=login");
        exit;
    }
    
    // Select controller based on module
    switch ($module) {
        case 'products':
            require_once 'controllers/product_controller.php';
            $controller = new ProductController();
            break;
        case 'login':
            require_once 'controllers/login_controller.php';
            $controller = new LoginController();
            break;
        case 'users':
        default:
            require_once 'controllers/user_controller.php';
            $controller = new UserController();
            break;
    }
    
    // Perform action
    switch ($action) {
        case 'create':
            $controller->create();
            break;
    
        case 'edit':
            $controller->edit($id);
            break;
    
        case 'delete':
            $controller->delete($id);
            break;
        
        case 'login':
            $controller->login();
            break;

        case 'logout':
            $controller->logout();
            break;
    
        default:
            $controller->index();
            break;
    }
    


    /* require_once 'controllers/user_controller.php';

    $controller = new UserController();

    $action = $_GET['action'] ?? 'index';
    $id = $_GET['id'] ?? null;

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit($id);
            break;
        case 'delete':
            $controller->delete($id);
            break;
        default:
            $controller->index();
            break;
    } */
?>
