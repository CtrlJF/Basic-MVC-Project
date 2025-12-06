<?php
require_once 'models/product.php';

class ProductController {

    private $product;

    public function __construct() {
        $this->product = new Product();
    }

    public function index() {
        $products = $this->product->getAll();
        include 'views/products/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name  = $_POST['name'];
            $price = $_POST['price'];
            $this->product->create($name, $price);
            $_SESSION['success'] = "Product added successfully!";
            header("Location: index.php?module=products");
            exit;
        }
        include 'views/products/create.php';
    }

    public function edit($id) {
        $product = $this->product->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name  = $_POST['name'];
            $price = $_POST['price'];
            $this->product->update($id, $name, $price);
            $_SESSION['success'] = "Product updated successfully!";
            header("Location: index.php?module=products");
            exit;
        }
        include 'views/products/edit.php';
    }

    public function delete($id) {
        $this->product->delete($id);
        $_SESSION['success'] = "Product deleted successfully!";
        header("Location: index.php?module=products");
        exit;
    }
}
