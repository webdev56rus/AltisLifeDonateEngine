<?php
include_once('../kernel/framework.php');
class Admin extends Framework
{
    function __construct()
    {

    }
    function main()
    {
        include_once('template/index.php');
    }

    function router()
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
            die('Not application');
        }
    }
}

$admin = new Admin;
$admin->main();
?>