<?php /* @var TechProduct $techProduct*/
    $action = isset($techProduct) ? '/admin/saveProduct.php' : '/admin/addProduct.php';
    $name = isset($techProduct) ? $techProduct->getName() : '';
    $categorySlug = isset($techProduct) ? $techProduct->getCategorySlug() : '';
    $price = isset($techProduct) ? $techProduct->getPrice() : '';
    $description = isset($techProduct) ? $techProduct->getDescription() : '';
    $isExists = isset($techProduct) ? $techProduct->getExists() : '';

    $oldSlug = isset($techProduct) ? $techProduct->getSlug() : null;

    $picturesStr = isset($techProduct) ? $techProduct->getIcons() : null;
    if(isset($picturesStr)){
        $pictures = explode(',',$picturesStr);
    }else{
        $pictures = null;
    }
    $imagePath = '../../../src/images/products/';
    $p1 = isset($pictures[0]) ? $pictures[0] : 'img.png';
    $p2 = isset($pictures[1]) ? $pictures[1] : 'img.png';
    $p3 = isset($pictures[2]) ? $pictures[2] : 'img.png';
    $p4 = isset($pictures[3]) ? $pictures[3] : 'img.png';
?>
<form action=<?php echo $action;?> method="post" enctype="multipart/form-data">

    <?php if ($oldSlug) require_once 'oldSlugHidden.php';?>

    <div class="form-group">
        <label for="exampleInputEmail1">Название</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>" id="exampleInputEmail1" placeholder="Название" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Цена</label>
        <input type="text" class="form-control" name="price" value="<?php echo $price;?>" id="exampleInputPassword1" placeholder="Цена" required>
    </div>
    <div class="form-group">
        <label for="disabledSelect">Выберите категорию</label>
        <select id="disabledSelect" name="category" value="<?php echo $categorySlug;?>" class="form-control" required>
            <option value="" disabled <?php echo isset($techProduct) ? '' : 'selected';?>>Категория</option>
            <?php
                /* @var Category $category*/
            foreach ($categories as $category) {?>
                <option value="<?php echo $category->getSlug();?> "><?php echo $category->getName();?> </option>
            <?php }?>
        </select>
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" rows="5" class="form-control"  name="description" placeholder="Описание"><?php echo $description;?></textarea>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="exists" value=<?php echo $isExists;
                                                             echo $isExists ? ' checked' : ''?>> В наличии
        </label>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №1</label>
        <div class="row">
            <div class="col-sm-10">
                <input accept="image/jpeg,image/png,image/gif" type="file" name="file1" onchange="bannerView.showImageSrc(this);"  class="form-control" aria-label="...">
            </div>
            <div class="col-sm-2">
                <img src="<?php echo $imagePath.$p1;?>" class="img-responsive" alt="">
                <input type="hidden" name="file1src" value="<?php echo $pictures[0];?>">
                <button type="button" class="btn btn-danger btn-xs positionAbsoluteLeftTopRemove" onclick="bannerView.toRemove(this);">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №2</label>
        <div class="row">
            <div class="col-sm-10">
                <input accept="image/jpeg,image/png,image/gif" type="file" name="file2" onchange="bannerView.showImageSrc(this);" class="form-control" aria-label="...">
            </div>
            <div class="col-sm-2">
                <img src=<?php echo $imagePath.$p2;?> class="img-responsive" alt="">
                <input type="hidden" name="file2src" value="<?php echo $pictures[1];?>">
                <button type="button" class="btn btn-danger btn-xs positionAbsoluteLeftTopRemove" onclick="bannerView.toRemove(this);">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №3</label>
        <div class="row">
            <div class="col-sm-10">
                <input accept="image/jpeg,image/png,image/gif" type="file" name="file3" onchange="bannerView.showImageSrc(this);" class="form-control" aria-label="...">
            </div>
            <div class="col-sm-2">
                <img src=<?php echo $imagePath.$p3;?> class="img-responsive" alt="">
                <input type="hidden" name="file3src" value="<?php echo $pictures[2];?>">
                <button type="button" class="btn btn-danger btn-xs positionAbsoluteLeftTopRemove" onclick="bannerView.toRemove(this);">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
        </div>        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Загрузить картинку №4</label>
        <div class="row">
            <div class="col-sm-10">
                <input accept="image/jpeg,image/png,image/gif" type="file" name="file4" onchange="bannerView.showImageSrc(this);" class="form-control" aria-label="...">
            </div>
            <div class="col-sm-2">
                <img src=<?php echo $imagePath.$p4;?> class="img-responsive" alt="">
                <input type="hidden" name="file4src" value="<?php echo $pictures[3];?>">
                <button type="button" class="btn btn-danger btn-xs positionAbsoluteLeftTopRemove" onclick="bannerView.toRemove(this);">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
        </div>        <p class="help-block">Форматы jpg, png, gif</p>
    </div>
    <button type="submit" class="btn btn-success">Сохранить</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
</form>

<script src="../Views/Admin/admin.js"></script>