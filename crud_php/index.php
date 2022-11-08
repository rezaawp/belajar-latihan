<?php
    include 'proses/DataSiswaProses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="create.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>AKSI</th>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item['nis'] ?></td>
                <td><?= $item['nama'] ?></td>
                <td>
                    <form action="" method="post">
                        <button value="<?= $item['nis'] ?>" type="submit" name="hapus">HAPUS</button>
                    </form>
                    <form action="edit.php" method="get">
                        <button value="<?= $item['nis'] ?>" type="submit" name="edit_key">EDIT</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>