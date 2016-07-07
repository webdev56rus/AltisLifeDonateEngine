<?php $admin = new Admin; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Altis Life Donate Control</title>
    <link href="template/css/bootstrap.css" type="text/css" rel="stylesheet">  
    <link href="template/css/bootstrap-theme.css" type="text/css" rel="stylesheet">  
    <link href="template/css/style.less" type="text/css" rel="stylesheet/less">
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/bootstrap.js"></script>
    <script src="template/js/less.min.js"></script>
    
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ALDE</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?app=menu">Меню <span class="sr-only">(current)</span></a></li>
                        <li><a href="?app=orders">Покупки</a></li>
                        <li><a href="?app=categories">Категории</a></li>
                        <li><a href="?app=products">Товары</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../" target="_blank"><span class="glyphicon glyphicon-shopping-cart"></span> Магазин</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
            <?php $admin->router(); ?>
        </div>
    </div>
</body>
</html>