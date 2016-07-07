<?php
class Products extends Framework
{
    function index()
    {
        if(isset($_GET['action']))
        {
            switch($_GET['action'])
            {
                case "add": $this->newProduct(); break;
                case "addproduct": $this->addProduct($_POST['product']); break;
                case "edit": break;
            }
        }
        else
        {
            $this->productsList();
        }
    }

    function addProduct($product_json)
    {
        $product = json_decode($product_json, true);
        $params = array(
            ':title'=>$product['title'],
            ':image'=>$product['image'],
            ':category'=>$product['category'],
            ':text'=>$product['text'],
            ':price'=>$product['price']
        );
        $this->preparedQuery("INSERT INTO products(`title`, `image`,`category`,`text`,`price`) VALUES (:title, :image, :category, :text, :price)", $params);
    }

    function productsList()
    {
        $categories = $this->getCategories();
        $products = $this->getProducts();
        require('products.php');
    }

    function newProduct()
    {
        $categories = $this->getCategories();
        $elements = $this->getElements();
        require('new.php');
    }

    function getCategories()
    {
        $query = $this->db->query("SELECT * FROM categories");
        $count = 0;
        while($category = $query->fetch(PDO::FETCH_ASSOC))
        {
            if($category['parent']>0)
            {
                $category['title'] = '--'.$category['title'];
                $params = array(':parent' => $category['parent']);
                $parentQuery = $this->preparedQuery("SELECT * FROM categories WHERE id = :parent", $params);
                $category['title'] .= '('.$parentQuery->fetch(PDO::FETCH_ASSOC)['title'].')';
            }
            $categories[$count] = $category;
            $count++;
        }
        return $categories;
    }

    function getProducts()
    {
        $query = $this->db->query("SELECT * FROM products ORDER BY id DESC");
        $count = 0;
        while($product = $query->fetch(PDO::FETCH_ASSOC))
        {
            $params = array(':id' => $product['category']);
            $categoryQuery = $this->preparedQuery("SELECT * FROM categories WHERE id = :id", $params);
            $product['category'] = $categoryQuery->fetch(PDO::FETCH_ASSOC)['title'];
            $products[$count] = $product;
            $count++;
        }
        return $products;
    }

    function getElements()
    {
        return array('Дом', 'Гараж', 'Танк', 'Что-то там');
    }
}
?>