<div class="thumbnail">
    <h2>Список товаров</h2>
    <a href="?app=products&action=add">Добавить товар</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Изображение</td>
                <td>Название</td>
                <td>Категория</td>
                <td>Цена</td>

            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><img src="<?php echo $product['image']; ?>" width="100"></td>
                <td><a href="?app=products&action=edit&id=<?php echo $product['id']; ?>"><?php echo $product['title']; ?></a></td>
                <td><a href=""><?php echo $product['category']; ?></a></td>
                <td>$<?php echo $product['price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>