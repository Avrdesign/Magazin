<?php if(isset($_SESSION["message"])){ ?>
    <div class="alert alert-<?php echo $_SESSION["message"]["status"];?>" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?php echo $_SESSION["message"]["status"] == "danger" ? 'Ошибка! ' : 'Успех! ' ;?></strong>
        <?php echo $_SESSION["message"]["text"];?>
    </div>
<?php unset($_SESSION["message"]); }?>