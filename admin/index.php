<?php session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Admin.php';
Admin::adminValid();
include_once '../Views/Admin/header.php';
?>


<?php include_once '../Views/Admin/Forms/product_form.php';?>
<?php include_once '../Views/Admin/alert.php';?>


<?php include_once '../Views/Admin/footer.php';?>