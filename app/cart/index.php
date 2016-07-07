<?php
class Cart extends Framework
{
    function index()
    {
        if(isset($_GET['action']))
        {
            switch($_GET['action'])
            {
                case "addtocart": $this->addToCart($_POST['product']); break;
                case "deletefromcart": $this->deletefromcart($_POST['product']); break;
                case "clearcart": $this->clearCart(); break;
            }
        }
        else
        {
            $this->getCart();
        }
    }

    function deleteFromCart($product)
    {
        $cart = explode(',', $_SESSION['cart']);
        unset($cart[$product]);
        $_SESSION['cart'] = implode(',', $cart);
    }

    function addToCart($product)
    {
        if(isset($_SESSION['cart']))
        {
            $cart = explode(',', $_SESSION['cart']);
        }
        else
        {
            $cart = array();
        }
        array_push($cart, $product);
        $_SESSION['cart'] = implode(',', $cart);

        echo 'Added'.$product;
        echo 'Cart:'.$_SESSION['cart'];
    }

    function clearCart()
    {
        unset($_SESSION['cart']);
        $this->getCart();
    }

    function getCart()
    {
        if(isset($_SESSION['cart']))
        {
            $cart = $_SESSION['cart'];
            $cart = explode(',',$cart);
            $count = 0;
            foreach($cart as $item)
            {
                if(isset($item)>0 and $item != 'undefined')
                {
                    $params = array(":id"=>$item);
                    $query = $this->preparedQuery("SELECT * FROM products WHERE id = :id", $params);
                    $products[$count] = $query->fetch(PDO::FETCH_ASSOC);
                    $count++;
                }
            }
            require('cart.php');
        }
        else
        {
            $isempty = true;
            require('cart.php');
        }

    }
}
?>