<!-- Large modal -->
<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".bs-example-modal-sm">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Добавить категорию
</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Добавление категории</h4>
            </div>
            <div class="modal-body">
                <?php require_once 'Forms/category_form.php'?>
            </div>
        </div>
    </div>
</div>


<div class="categories_table" data-example-id="striped-table">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Slug</th>
            <th>Изменить</th>
        </tr>
        </thead>
        <tbody>
        <?php
        /* @var Category $category*/
        foreach ($categories as $category)  {?>
            <tr>
                <td scope="row"><?php echo $category->getName(); ?></td>
                <td><?php echo $category->getSlug(); ?></td>
                <td>
                    <a href="<?php echo "?page=category&slug=".$category->getSlug(); ?>" class="btn btn-warning">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>