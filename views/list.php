<?php
include_once "controllers/ProdukController.php";
$controller = new ProdukController();
$data = $controller->model->getAll();
?>

<h1>Shine Mart</h1>
<h3>Data Produk</h3>

<a href="views/tambah.php">+ Tambah Produk</a>

<br><br>

<table border="1" cellpadding="10">
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
        <a href="views/edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="index.php?hapus=<?= $row['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>