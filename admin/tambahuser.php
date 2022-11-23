<?php 
session_start();
require 'function.php';


if(isset($_POST["kirim"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil ditambahkan');
            window.location = 'user.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'user.php';
        </script>
        ";
    }
}

?>

<?php require '../layout/navbar.php'?>

<div class="container">
    <div class="main">
        <div class="box">
            <h3>Tambah User</h3>

            <form action="" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">

                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control">

                <label for="roles">Roles</label>
                <select name="roles" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Customer">Customer</option>
    
                </select>
                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</div>