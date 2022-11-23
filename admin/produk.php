<?php 
session_start();
require 'function.php';

$produk = query("SELECT * FROM produk");

?>


<?php require '../layout/sidebar.php'?>

<div class="container">
    <div class="main">
        <h3>data produk</h3><br>

        <a href="tambahproduk.php" class="tambah">tambah produk</a>
        <table class="table table-hover">
            <tr>  
                <th>no.</th>
                <th>nama produk</th>
                <th>harga</th>
                <th>tersedia</th>
                <th>foto</th>
                <th>deskripsi</th>
                <th>aksi</th>
            </tr>
            
            <?php $i = 1; ?>
            <?php foreach($produk as $data) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data["nama_produk"]; ?></td>
                    <td><?= $data["harga"]; ?></td>
                    <td><?= $data["tersedia"]; ?></td>
                    <td><img src="../foto/<?= $data["foto"]; ?>" width="80px" alt=""></td>
                    <td><?= $data["deskripsi"]; ?></td>
                    <td>
                        <a href="editproduk.php?id=<?= $data["id_produk"];?>" class="edit">edit</a>
                        <a href="hapusproduk.php?id=<?= $data["id_produk"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
        </table>
    </div>
</div>