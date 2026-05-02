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

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
}

.container {
    width: 40%;
    margin: 80px auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
}

h2 {
    color: #D4AF37;
    margin-bottom: 20px;
}

input {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background: #D4AF37;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #b8962e;
}
</style>

<div class="container">
    <h2>Tambah Produk</h2>

    <form method="POST">
        <input type="text" name="nama_produk" placeholder="Nama Produk" required><br>
        <input type="number" name="harga" placeholder="Harga" required><br>
        <input type="number" name="stok" placeholder="Stok" required><br>
        <button name="simpan">Simpan</button>
    </form>
</div>