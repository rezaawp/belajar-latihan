<?php
class DB {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'latihan';

    private $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    public function query($query)
    {
        return mysqli_query($this->koneksi, $query);
    }

    public function allData()
    {
        $data = $this->query("SELECT * FROM siswa");
        $result = [];
        while ($siswa = mysqli_fetch_array($data))
        {
            array_push($result, $siswa);
        }

        return $result;
    }

    public function cariNis($nis)
    {
        $data = $this->query("SELECT * FROM siswa WHERE nis='$nis'");
        $result = [];
        while ($siswa = mysqli_fetch_array($data))
        {
            array_push($result, $siswa);
        }

        return $result;
    }
}