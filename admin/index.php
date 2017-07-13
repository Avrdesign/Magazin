<?php session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Admin.php';
Admin::adminValid();

include_once '../Views/Admin/header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <?php
            $page = isset($_GET["page"]) ? $_GET["page"] : "";
            include_once '../Views/Admin/leftMenu.php';?>
        </div>
        <div class="col-sm-9">
            <?php include_once '../Views/Admin/alert.php';
                switch ($page){
                    case Admin::PRODUCTS :
                        require_once '../Views/Admin/products.php';
                        break;
                    case Admin::CATEGORIES :
                        require_once '../Views/Admin/categories.php';
                        break;
                    case Admin::INFO :
                        echo "info";
                        break;
                    case Admin::PROMO :
                        require_once '../Views/Admin/promo.php';
                        break;
                    case Admin::COMMENTS :
                        require_once '../Views/Admin/comments.php';
                        break;
                    default :
                        require_once '../Views/Admin/orders.php';
                        break;
                }
            ?>
        </div>
    </div>
</div>

<?php include_once '../Views/Admin/footer.php';?>



