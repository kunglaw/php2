<?php 

    /*
        $server = "localhost" / http://127.0.0.1
        $username = "root" 
        $password = ""
        $database = ""
    */ 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sekolah_db";

    $connect = mysqli_connect($server,$username,$password) OR die("tidak bisa koneksi ke database");
    $database = mysqli_select_db($connect,$database)or die("Database tidak ada");