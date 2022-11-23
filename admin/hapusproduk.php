<?php
require 'function.php';
$id = $_GET["id"];

if(hapusProduk($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil dihapus');
        window.location = 'produk.php';
    </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert('data gagal dihapus')
            window.location = 'produk.php';
        </script>
        ";
}

?>