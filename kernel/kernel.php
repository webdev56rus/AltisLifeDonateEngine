<?php
class Kernel
{
    public static function init()
    {
        self::template();
    }
    
    public static function template()
    {
        require_once('template/index.php');
    }

    function content()
    {
        if(isset($_GET['app']))
        {
            $this->getApp($_GET['app']);
        }
        else
        {
            $this->getApp('main');
        }
    }

    function getApp($app)
    {
        if(isset($app) and file_exists('app/'.$app.'/index.php'))
        {
            require('app/'.$app.'/index.php');
            $$app = new $app;
            $$app->index();
        }
        else
        {
            $app = 'products';
            require('app/'.$app.'/index.php');
            $$app = new $app;
            $$app->index();
        }
    }
}
?>