<?php
class Product {
    private $products = [];

    public function __construct() {
        // Initialisation avec des données fictives
        $this->products = [
            ["name" => "Produit 1", "price" => 10, "description" => "Description 1"],
            ["name" => "Produit 2", "price" => 20, "description" => "Description 2"],
        ];
    }

    public function getAll() {
        return $this->products;
    }

    public function add($name, $price, $description) {
        $this->products[] = ["name" => $name, "price" => $price, "description" => $description];
    }

    public function delete($index) {
        if (isset($this->products[$index])) {
            unset($this->products[$index]);
            $this->products = array_values($this->products);
        }
    }
}
