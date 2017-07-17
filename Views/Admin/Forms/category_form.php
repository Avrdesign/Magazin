<?php
    $action = isset($category) ? '/admin/saveCategory.php' : '/admin/addCategory.php';
    $name = isset($category) ? $category->getName() : '';
?>


<form action=<?php echo $action;?> method="post">
    <input type="hidden" name="oldSlug" value="<?php echo isset($category) ? $category->getSlug() : '';?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Название</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>" id="exampleInputEmail1" placeholder="Название" required>
    </div>
    <button type="submit" class="btn btn-success"><?php echo isset($category) ? 'Сохранить' :'Добавить';?></button>
</form>

<?php if(isset($category)){ ?>
    <form action='/admin/removeCategory.php' method="post" style="margin-top: -35px;">
        <input type="hidden" name="slug" value="<?php echo $category ? $category->getSlug() : '';?>">
        <button type="submit" class="btn btn-danger pull-right">Удалить</button>
    </form>
<?php }?>