<?php
class Categories extends Framework
{
    function index()
    {
        $query = $this->db->query("SELECT * FROM categories");
        $count = 0;
        while($category = $query->fetch(PDO::FETCH_ASSOC))
        {
            if($category['parent']>0)
            {
                $category['title'] = '--'.$category['title'];
                $params = array(':parent' => $category['parent']);
                $parentQuery = $this->preparedQuery("SELECT * FROM categories WHERE parent = :parent", $params);
                $category['parent'] = $parentQuery->fetch(PDO::FETCH_ASSOC)['title'];
            }
            $categories[$count] = $category;
            $count++;
        }
        require('categories.php');
    }
}
?>