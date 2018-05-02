<?php 

    if($_SERVER["REQUEST_METHOD"] != "POST")
    {
        header("HTTP/1.0 404 Not Found");
        echo "<h1> 404 Not Found </h1>";
        exit;
    }

    include "../config/koneksi.php";

    // process
    $NIK     = $_POST["nik"]; 
    $nama    = $_POST["nama"]; // karena method post , maka $_POST
    $gender  = $_POST["jenis_kelamin"]; 
    $alamat  = $_POST["alamat"]; // karena method post , maka $_POST

    // process insert 
    $str = "UPDATE murid_tbl SET 
    nama = '$nama',
    jenis_kelamin = '$gender',
    alamat = '$alamat' 
    WHERE nik = '$NIK' ";

    $q   = mysqli_query($connect,$str) or die (  mysqli_error($connect) ); 

    echo " data berhasil masuk";