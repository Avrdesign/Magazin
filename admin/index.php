<?php session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Admin.php';
require_once '../DB/DBManager.php';
require_once '../Entity/ProductRelation.php';
require_once '../Entity/CategoriesRelation.php';
require_once '../Models/Product.php';
require_once '../Models/TechProduct.php';
require_once '../Models/Category.php';

Admin::adminValid();

include_once '../Views/Admin/header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <?php
            $page = isset($_GET["page"]) ? $_GET["page"] : "";
            if($page == Admin::PRODUCT or $page == Admin::CATEGORY){
                if (isset($_GET["slug"])){
                    $slug = $_GET["slug"] ;
                }else{
                    $page  = "";
                }
            }
            include_once '../Views/Admin/leftMenu.php';?>
        </div>
        <div class="col-sm-9">
            <?php include_once '../Views/Admin/alert.php';
                switch ($page){
                    case Admin::PRODUCTS :
                        $productRelation = new ProductRelation();
                        $categoriesRelation = new CategoriesRelation();
                        $categories = $categoriesRelation->getAllCategories();
                        $techProducts = $productRelation->getAllTechProducts();
                        require_once '../Views/Admin/products.php';
                        break;
                    case Admin::CATEGORIES :
                        $categoriesRelation = new CategoriesRelation();
                        $categories = $categoriesRelation->getAllCategories();
                        require_once '../Views/Admin/categories.php';
                        break;
                    case Admin::CATEGORY :
                        $categoriesRelation = new CategoriesRelation();
                        $category = $categoriesRelation->getCategoryBySlug($slug);
                        require_once '../Views/Admin/category.php';
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
                    case Admin::PRODUCT :
                        $productRelation = new ProductRelation();
                        $categoriesRelation = new CategoriesRelation();
                        $categories = $categoriesRelation->getAllCategories();
                        $techProduct = $productRelation->getTechProductBySlug($slug);
                        require_once '../Views/Admin/product.php';
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



