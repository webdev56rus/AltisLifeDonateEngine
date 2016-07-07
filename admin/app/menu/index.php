<?php
class Menu extends Framework
{
    function index()
    {
        $query = $this->db->query("SELECT * FROM categories");
        $count = 0;
        while($category = $query->fetch(PDO::FETCH_ASSOC))
        {
            if($category['parent'] > 0)
            {
                $category['title'] = "--".$category['title'];
            }
            $categories[$count] = $category;
            $count++;
        }
        require('menu.php');
    }
}

?>