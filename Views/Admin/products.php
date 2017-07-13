<!-- Large modal -->
<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".bs-example-modal-md">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Добавить продукт
</button>

<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Добавление продукта</h4>
            </div>
            <div class="modal-body">
                <?php require_once 'Forms/product_form.php'?>
            </div>
        </div>
    </div>
</div>


<div class="products_table" data-example-id="striped-table">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Slug</th>
            <th>Цена</th>
            <th>Наличие</th>
            <th>Категория</th>
            <th>Редактировать</th>
        </tr>
        </thead>
        <tbody>
        <?php
            /* @var TechProduct $product*/
            foreach ($techProducts as $product)  {?>
            <tr>
                <th scope="row"><?php echo $product->getName(); ?></th>
                <td><?php echo $product->getSlug(); ?></td>
                <td><?php echo $product->getPrice(); ?></td>
                <td><?php echo $product->getExists() ? "Да" : "Нет"; ?></td>
                <td><?php echo $product->getCategorySlug(); ?></td>
                <td>
                    <a href="<?php echo "?page=product&slug=".$product->getSlug(); ?>" class="btn btn-warning">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>