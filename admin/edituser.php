<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];


if(isset($_POST["kirim"])){
    if(editUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'user.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal diubah');
            window.location = 'user.php';
        </script>
        ";
    }
}

?>
<?php require '../layout/navbar.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="box">
                <h3>Edit Data User</h3>
    
                <form action="" method="POST">
                    <input type="hidden" name="id_user" id="id_user" value="<?= $user["id_user"]; ?>">
                    
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"]; ?>">
    
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $user["nama"]; ?>">
    
                    <label for="roles">Roles</label>
                    <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
                        <option value="Admin">Admin</option>
                        <option value="Customer">Customer</option>
                    </select>
    
                    <button type="submit" name="kirim">Edit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>