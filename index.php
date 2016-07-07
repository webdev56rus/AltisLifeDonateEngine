<?php
session_start();
require_once('kernel/kernel.php');
require_once('kernel/framework.php');
$framework = new Framework();
$kernel = new Kernel;
$kernel::init();
?>