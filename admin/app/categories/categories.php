<div class="thumbnail">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Добавить категорию</td>
                <td><input type="text" class="form-control" placeholder="Название категории"></td>
                <td>
                    <select class="form-control">
                        <option value="" selected>НЕТ</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td><button class="btn btn-success" id="add-category"><span class="glyphicon glyphicon-plus"></span> Добавить</button></td>
            </tr>
            <tr>
                <td>ID</td>
                <td>Наименование</td>
                <td>Родитель</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category): ?>
            <tr>
                <td><?php echo $category['id']; ?></td>
                <td><?php echo $category['title']; ?></td>
                <td><?php echo $category['parent']; ?></td>
                <td><a href="">Удалить категорию</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>