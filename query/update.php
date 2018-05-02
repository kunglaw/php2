<?php 
    // path   
    // url 

    include "../config/koneksi.php";

    /*
        NIK , nama, jenis_kelamin, alamat
    */
    $NIK = "1200435678";
  
    $alamat = "jl. Pondok Indah";
    
    //$str = "INSERT INTO murid_tbl SET NIK='$NIK', nama='$nama'";
    $str = "UPDATE murid_tbl SET alamat = '$alamat' WHERE NIK = '$NIK'";
    $q = mysqli_query($connect,$str);

    echo "data berhasil diupdate";