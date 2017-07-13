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
            <th>id</th>
            <th>Имя</th>
            <th>Slug</th>
        </tr>
        </thead>
        <tbody>


        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
        </tr>


        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
        </tr>


        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
        </tr>


        </tbody>
    </table>
</div>