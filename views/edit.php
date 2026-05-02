<?php
include_once "../controllers/ProdukController.php";
$controller = new ProdukController();

$id = $_GET['id'];
$data = $controller->model->getById($id);
$row = $data->fetch_assoc();

if(isset($_POST['update'])) {
    $controller->model->update(
        $id,
        $_POST['nama_produk'],
        $_POST['harga'],
        $_POST['stok']
    );
    header("Location: ../index.php");
}
?>

<link rel="stylesheet" href="../assets/style.css">

<h2>Edit Produk</h2>

<form method="POST">
<input type="text" name="nama_produk" value="<?= $row['nama_produk']; ?>"><br>
<input type="number" name="harga" value="<?= $row['harga']; ?>"><br>
<input type="number" name="stok" value="<?= $row['stok']; ?>"><br>
<button name="update">Update</button>
</form>