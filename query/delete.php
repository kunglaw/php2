<?php 

    include "../config/koneksi.php";
    $NIK = "1200435678";
    $str = "DELETE FROM murid_tbl WHERE NIK = '$NIK' ";
    $q = mysqli_query($connect,$str);

    echo "berhasil delete";