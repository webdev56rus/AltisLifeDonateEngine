<?php
class Products extends Framework
{
    function index()
    {

        $query = $this->db->query("SELECT * FROM products ORDER BY id DESC");
        while($product = $query->fetch(PDO::FETCH_ASSOC))
        {
            include('list.php');
        }
    }

    function admin()
    {
        echo 111;
    }
}

/*$products = new Products;
$products->index();*/
?>
