<?php 
session_start();
require 'function.php';

if(isset($_POST["kirim"])){
    if(tambahProduk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan');
            window.location = 'produk.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
        </script>
        ";
    }
}

?>

<?php require '../layout/navbar.php'?>
<div class="container">
    <div class="main">
        <div class="box">
            <h3>Tambah Produk</h3>

            <form action="" method="POST" enctype="multipart/form-data">
                <label for="nama_produk">nama produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control">

                <label for="harga">harga</label>
                <input type="text" name="harga" id="harga" class="form-control">

                <label for="tersedia">tersedia</label>
                <input type="text" name="tersedia" id="tersedia" class="form-control">

                <label for="foto">foto</label>
                <input type="file" name="foto" id="foto" class="form-control">


                <label for="deskripsi">deskripsi</label>
                <textarea type="deskripsi" name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="6"></textarea>

                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</div>