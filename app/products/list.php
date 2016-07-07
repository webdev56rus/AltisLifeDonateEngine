<div class="product row">
    <div class="col-md-12">
        <h2 class="title"><?php echo $product['title']; ?></h2>
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
        <button class="add-to-cart" id="<?php echo $product['id']; ?>">
            <span class="glyphicon glyphicon-shopping-cart"></span>
        </button>
    </div>
</div>