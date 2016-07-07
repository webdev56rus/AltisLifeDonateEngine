<div class="product row">
    <div class="col-md-12">
        <a href="?app=product&id=<?php echo $product['id']; ?>" class="title"><?php echo $product['title']; ?></a>
    </div>
    <div class="col-md-4">
        <img src="<?php echo $product['image']; ?>" class="image">
    </div>
    <div class="col-md-6">
        <p>
            <?php echo $product['text']; ?>
        </p>
    </div>
    <div class="col-md-2">
        <div class="price">$<?php echo $product['price']; ?></div>
        <button class="add-to-cart">
            <span class="glyphicon glyphicon-shopping-cart" data-product="<?php echo $product['id']; ?>"></span>
        </button>
    </div>
</div>