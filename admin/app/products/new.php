<div class="thumbnail row">
    <h2>Добавить новый продукт</h2>
    <div class="col-md-6">
        <form id="product">
            <label>Название продукта</label>
            <input type="text" class="form-control" id="title">
            <label>Ссылка на изображение</label>
            <input type="text" class="form-control" id="image">
            <label>Категория</label>
            <select class="form-control" id="category">
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Игровой элемент (Будем получать из игровой БД)</label>
            <select class="form-control" id="category">
                <?php foreach($elements as $element): ?>
                    <option value=""><?php echo $element; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Текстовое описание</label>
            <textarea class="form-control" id="text"></textarea>
            <label>Цена</label>
            <div class="form-inline">
                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="text" class="form-control"  placeholder="0.50" id="price">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="save">Сохранить</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <label>Изображение</label>
        <img src="" width="90%" id="preview">
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(){
            $('#preview').attr('src', $(this).val());
        });
        $('#save').click(function(){
            var product = {};
            product.title = $('#title').val();
            product.image = $('#image').val();
            product.category = $('#category option:selected').val();
            product.text = $('#text').val();
            product.price = $('#price').val();
            product = JSON.stringify(product);
            console.log(product);
            $.ajax({
                url: "?app=products&action=addproduct",
                type:"post",
                data:"product="+product,
                success:function(response){
                    location.href="?app=products";
                }
            });
            return false;
        });

    });
</script>