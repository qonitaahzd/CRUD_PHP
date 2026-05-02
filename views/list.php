<?php
include_once "controllers/ProdukController.php";
$controller = new ProdukController();
$data = $controller->model->getAll();
?>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
}

.container {
    width: 80%;
    margin: auto;
    text-align: center;
}

h1 {
    color: #D4AF37;
    margin-top: 20px;
}

h3 {
    margin-bottom: 20px;
}

/* tombol */
.btn {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 15px;
    background: #D4AF37;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

/* tabel */
table {
    margin: auto;
    border-collapse: collapse;
    width: 100%;
    background: white;
}

th {
    background: #D4AF37;
    color: white;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
}

tr:hover {
    background: #f9f9f9;
}

/* link aksi */
.edit {
    color: blue;
    text-decoration: none;
}

.hapus {
    color: red;
    text-decoration: none;
}
</style>

<div class="container">
    <h1>Shine Mart</h1>
    <h3>Data Produk</h3>

    <a class="btn" href="views/tambah.php">+ Tambah Produk</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; while($row = $data->fetch_assoc()) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_produk']; ?></td>
            <td>Rp <?= $row['harga']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td>
                <a class="edit" href="views/edit.php?id=<?= $row['id']; ?>">Edit</a> |
                <a class="hapus" href="index.php?hapus=<?= $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>