<?php 
    // path   
    // url 

    include "../config/koneksi.php";

    /*
        NIK , nama, jenis_kelamin, alamat
    */
    $NIK = "1200435678";
    $nama = "David";
    $gender = "Laki-Laki";
    $alamat = "jl. kebayoran baru";
    
    //$str = "INSERT INTO murid_tbl SET NIK='$NIK', nama='$nama'";
    $str = "INSERT INTO murid_tbl ( NIK, nama, jenis_kelamin, alamat ) values ('$NIK','$nama','$gender','$alamat' ) ";
    $q = mysqli_query($connect,$str);

    echo "data berhasil dimasukkan";