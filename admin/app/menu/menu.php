<div class="thumbnail">
    <h2>Меню</h2>
    <table class="table table-bordered" id="menu">
        <thead>
            <tr>
                <td>Позиция</td>
                <td>Заголовок</td>
                <td>Путь</td>
                <td>Родитель</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="" class="glyphicon glyphicon-chevron-up to-up"></a>
                    <a href="" class="glyphicon glyphicon-chevron-down to-down"></a>
                    <a href="" class="glyphicon glyphicon-remove-sign remove"></a>
                </td>
                <td><input type="text" class="form-control title"></td>
                <td>
                    <select class="form-control">
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <select class="form-control parent">
                        
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-default" id="add-element"><span class="glyphicon glyphicon-plus"></span> Добавить элемент</button>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#add-element').click(function(){
            $('#menu tbody').append($('#menu tbody tr:last').get(0).outerHTML);
            caller();
        });

        caller();
    });

    function caller() {
        $('#menu .remove').on('click', function () {
            $(this).closest('tr').remove();
            return false;
        });
    }
</script>