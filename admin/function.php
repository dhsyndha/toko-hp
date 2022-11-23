<?php

require '../koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
function tambahUser($data){
    global $conn;

    $nama = htmlspecialchars ($data["nama"]);
    $username = htmlspecialchars ($data["username"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL,  '$nama','$username', '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editUser($data){
    global $conn;

    $id = ($data["id_user"]);
    $username = htmlspecialchars($data["username"]);
    $nama = htmlspecialchars($data["nama"]);
    $roles = htmlspecialchars($data["roles"]);
    
    $query = "UPDATE user SET
    username = '$username',
    nama = '$nama',
    roles = '$roles' WHERE id_user = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user ='$id'");
    return mysqli_affected_rows($conn);
}

function tambahProduk($data){
    global $conn;

    
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $tersedia = htmlspecialchars($data["tersedia"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $dekripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO produk VALUES(NULL, '$nama_produk', '$harga', '$foto', '$tersedia', '$dekripsi')";
    move_uploaded_file($files, "../foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusProduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk ='$id'");
    return mysqli_affected_rows($conn);
}
function editProduk($data){
    global $conn;

    $id = ($data["id_produk"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $tersedia = htmlspecialchars($data["tersedia"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        tersedia = '$tersedia',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        tersedia = '$tersedia',
        foto = '$foto',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";
        move_uploaded_file($files, "../foto/".$foto);

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}
?>