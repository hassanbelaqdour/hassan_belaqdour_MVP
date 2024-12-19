<?php
require_once 'models/Product.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new Product();
    }

    public function index() {
        $products = $this->model->getAll();
        include 'views/product_list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $this->model->add($name, $price, $description);
            header('Location: index.php');
        } else {
            include 'views/add_product.php';
        }
    }

    public function delete($index) {
        $this->model->delete($index);
        header('Location: index.php');
    }
}
