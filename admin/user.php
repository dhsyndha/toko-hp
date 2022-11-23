<?php
session_start();
require 'function.php';

$user = query("SELECT * FROM user");

?>
<?php require '../layout/sidebar.php' ?>
<div class="container">
    <div class="main">
        <h3>Data user</h3>
        <a href="tambahuser.php" class="tambah">tambah user</a>

        <table class="table table-hover">
            <tr>
                <th>no</th>
                <th>username</th>
                <th>nama</th>
                <th>roles</th>
                <th>aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($user as $data) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data["username"]; ?></td>
                    <td><?= $data["nama"]; ?></td>
                    <td><?= $data["roles"]; ?></td>
                    <td>
                        <a href="edituser.php?id=<?= $data["id_user"];?>" class="edit">edit</a>
                        <a href="hapususer.php?id=<?= $data["id_user"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus');">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php $i++; ?>
        </table>
    </div>
</div>