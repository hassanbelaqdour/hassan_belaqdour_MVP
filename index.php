<?php
require_once 'controllers/ProductController.php';

$controller = new ProductController();

$action = $_GET['action'] ?? 'index';
$index = $_GET['index'] ?? null;

if ($action === 'add') {
    $controller->add();
} elseif ($action === 'delete' && $index !== null) {
    $controller->delete($index);
} else {
    $controller->index();
}
