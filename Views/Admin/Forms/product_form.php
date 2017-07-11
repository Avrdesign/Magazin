<form action='/admin/imageLoader.php' method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Название</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Название" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Цена</label>
        <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Цена" required>
    </div>
    <div class="form-group">
        <label for="disabledSelect">Выберите категорию</label>
        <select id="disabledSelect" name="category" class="form-control" required>
            <option value="" disabled selected>Категория</option>
            <option value="dreli">Дрели</option>
            <option value="perforators">Шурупаверты</option>
            <option value="ggg">Перформаторы</option>
        </select>
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" rows="5" class="form-control" name="description"  placeholder="Описание"></textarea>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="exists" value=true checked> В наличии
        </label>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №1</label>
        <input accept="image/jpeg,image/png,image/gif" type="file" name="file1" class="form-control" aria-label="...">
        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №2</label>
        <input accept="image/jpeg,image/png,image/gif" type="file" name="file2" class="form-control" aria-label="...">
        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №3</label>
        <input accept="image/jpeg,image/png,image/gif" type="file" name="file3" class="form-control" aria-label="...">
        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №4</label>
        <input accept="image/jpeg,image/png,image/gif" type="file" name="file4" class="form-control" aria-label="...">
        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <button type="submit" class="btn btn-success">Сохранить</button>
</form>