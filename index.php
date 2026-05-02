<?php
include_once "controllers/ProdukController.php";
$controller = new ProdukController();

if(isset($_GET['hapus'])) {
    $controller->model->delete($_GET['hapus']);
    header("Location: index.php");
}
include_once "views/list.php";
?>