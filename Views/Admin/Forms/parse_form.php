<form action="parseProducts.php" method="post">
    <div class="form-group">
        <label for="url">Url страницы</label>
        <input type="text" class="form-control" name="url" value="" id="url" placeholder="Название" required>
    </div>
    <button type="submit" class="btn btn-success">Парсить</button>
</form>
<?php
    if($productsArray = @$_SESSION["message"]["products"]){
        require_once '../Views/Admin/parseItems.php';
    }
    unset($_SESSION["message"]);
?>
