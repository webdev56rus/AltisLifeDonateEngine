<?php
class Product extends Framework
{
    function index()
    {
        $params = array(':id' => $_GET['id']);
        $query = $this->preparedQuery("SELECT * FROM products WHERE id = :id", $params);
        $product = $query->fetch(PDO::FETCH_ASSOC);
        include('product.php');
    }
}

$product = new Product;
$product->index();
?>