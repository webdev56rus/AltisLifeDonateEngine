<h2 class="title">Корзина</h2>
<?php if(isset($isempty) == true): ?>
    <h3>Ваша корзина пуста</h3>
<?php else: ?>
    <a href="?app=cart&action=clearcart">Очистить корзину</a>
    <?php foreach($products as $product): ?>
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
                <button class="buy-now" id="<?php echo $product['id']; ?>">
                    Купить
                </button>
                <a href="" class="delete-from-cart" id="<?php echo $product['id']; ?>">Удалить</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
