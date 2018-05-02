<?php

    if($_SERVER["REQUEST_METHOD"] != "POST")
    {
        header("HTTP/1.0 404 Not Found");
        echo "<h1> 404 Not Found </h1>";
        exit;
    }

    include "../config/koneksi.php";

    $nik = $_POST["nik"];

    $str = "DELETE FROM murid_tbl WHERE NIK = '$nik' ";
    $q   = mysqli_query($connect,$str);
    
    header("location:".$base_url."index.php?p=student");