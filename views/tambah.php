<?php
include_once "../controllers/ProdukController.php";
$controller = new ProdukController();

if(isset($_POST['simpan'])) {
    $controller->model->create(
        $_POST['nama_produk'],
        $_POST['harga'],
        $_POST['stok']
    );
    header("Location: ../index.php");
}
?>

<link rel="stylesheet" href="../assets/style.css">

<h2>Tambah Produk</h2>

<form method="POST">
<input type="text" name="nama_produk" placeholder="Nama Produk"><br>
<input type="number" name="harga" placeholder="Harga"><br>
<input type="number" name="stok" placeholder="Stok"><br>
<button name="simpan">Simpan</button>
</form>
