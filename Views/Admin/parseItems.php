<form action="../../admin/loadProducts.php" method="post">
<div class="row">
    <?php foreach ($productsArray as $key=>$item){ ?>
        <div class="col-xs-12">
            <div class="thumbnail shadowBox">
                <img class="col-sm-6 col-md-3" src="<?php echo $item['icon'];?>" alt="...">
                <input type="hidden" name="icon-<?php echo $key;?>" value="<?php echo $item['icon'];?>">
                <div class="col-sm-6 col-md-9">
                    <div class="caption">
                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" class="form-control" name="name-<?php echo $key;?>" value="<?php echo $item['name'];?>" id="name" placeholder="Название" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Цена</label>
                            <textarea rows="5" class="form-control" name="description-<?php echo $key;?>" id="description" placeholder="Описание" required> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Цена</label>
                            <input type="text" class="form-control" name="price-<?php echo $key;?>" value="<?php echo $item['price'];?>" id="price" placeholder="Цена">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="exists-<?php echo $key;?>"> В наличии
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
    <div class="form-group">
        <label for="category">Выберите категорию</label>
        <select id="category" name="category" class="form-control" required>
            <option value="" disabled selected>Категория</option>
            <?php
            /* @var Category $category*/
            foreach ($categories as $category) {?>
                <option value="<?php echo $category->getSlug();?>"><?php echo $category->getName();?> </option>
            <?php }?>
        </select>
    </div>
    <button type="submit" name="parse" class="btn btn-success">
        Загрузить
    </button>
</form>
