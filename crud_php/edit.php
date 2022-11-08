<?php
    include 'proses/DataSiswaProses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nis" placeholder="NIS" value="<?= $siswa[0]['nis'] ?>"> <br>
        <input type="text" name="nama" id="" placeholder="NAMA" value="<?= $siswa[0]['nama'] ?>"> <br>
        <button type="submit" name="update">UPDATE</button>
    </form>
</body>
</html>