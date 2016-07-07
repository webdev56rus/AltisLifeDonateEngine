<?php $kernel = new Kernel; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Donate - KGBInside</title>
    <link href="template/css/bootstrap.css" type="text/css" rel="stylesheet">  
    <link href="template/css/bootstrap-theme.css" type="text/css" rel="stylesheet">  
    <link href="template/css/style.less" type="text/css" rel="stylesheet/less">  
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/bootstrap.js"></script>
    <script src="template/js/less.min.js"></script>
    <script src="template/js/catalog.js"></script>

</head>
<body>
    <div class="container">
        <section id="wrapper">
            <nav>
                <?php require('navigation.php'); ?>
            </nav>
        </section>
        <section id="wrapper" class="content">
            <div class="container">
                
                <div class="col-md-12">
                    <div class="product-list">
                        <?php $kernel->content('list'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>