<?php 
    include 'database/DB.php';

$db = new DB();
$data = $db->allData();

if(isset($_REQUEST['simpan']))
{
    $nis = $_REQUEST['nis'];
    $nama = $_REQUEST['nama'];
    $db->query("INSERT INTO siswa VALUES ('$nis', '$nama')");
}

if(isset($_REQUEST['hapus']))
{
    $nis = $_REQUEST['hapus'];
    $db->query("DELETE FROM siswa WHERE nis='$nis'");
    return header('Location: index.php');
}

if (isset($_REQUEST['edit_key']))
{
    $siswa = $db->cariNis($_REQUEST['edit_key']);
}

if(isset($_REQUEST['update']))
{
    $nis_key = $_REQUEST['edit_key'];
    $nis = $_REQUEST['nis'];
    $nama = $_REQUEST['nama'];
    $db->query("UPDATE siswa SET nis='$nis', nama='$nama' WHERE nis='$nis_key'");
    return header('Location: index.php');
}