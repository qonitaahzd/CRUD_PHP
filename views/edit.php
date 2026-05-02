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

/* tombol kembali */
.back {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: #555;
}
</style>

<div class="container">
    <h2>Edit Produk</h2>

    <form method="POST">
        <input type="text" name="nama_produk" value="<?= $row['nama_produk']; ?>" required><br>
        <input type="number" name="harga" value="<?= $row['harga']; ?>" required><br>
        <input type="number" name="stok" value="<?= $row['stok']; ?>" required><br>

        <button name="update">Update</button>
    </form>

    <a class="back" href="../index.php">← Kembali</a>
</div>