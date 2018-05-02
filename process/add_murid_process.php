<?php 
    
    if($_SERVER["REQUEST_METHOD"] != "POST")
    {
        header("HTTP/1.0 404 Not Found");
        echo "<h1> 404 Not Found </h1>";
        exit;
    }

    include "../config/config.php";
    include "../config/koneksi.php";

    // process
    $NIK     = $_POST["nik"]; 
    $nama    = $_POST["nama"]; // karena method post , maka $_POST
    $gender  = $_POST["jenis_kelamin"]; 
    $alamat  = $_POST["alamat"]; // karena method post , maka $_POST
    $file    = $_FILES["photo"];
    
    if($NIK != "" && $nama != "")
    {
        
        // Array ( 
            // [name] => Dimas-web.jpg 
            // [type] => image/jpeg 
            // [tmp_name] => E:\web\tmp\php1A82.tmp // lokasi fisik upload file 
            // [error] => 0
            // [size] => 51 477 )
        $photo = ""; 
        if(!empty($file["name"]))
        {
            move_uploaded_file($file["tmp_name"],"../upload/img/$file[name]") or die( $file["error"] );
            $photo = $file["name"];
        }
       
        // process insert 
        $str = "INSERT INTO murid_tbl (NIK,nama,jenis_kelamin,photo,alamat) 
        VALUES ('$NIK','$nama','$gender','$photo','$alamat')";

        $q   = mysqli_query($connect,$str) or die (  mysqli_error($connect) ); 
       
       //echo "berhasil";
       header("location:".$base_url."index.php?p=student");
    }
    else
    {
        $error_msg = "";
        if($NIK == "")
        {
            $error_msg .= "<div> NIK harus diisi </div>";
        }
        if($nama == "")
        {
            $error_msg .= "<div> nama harus diisi </div>";
        }

        header("location:".$base_url."index.php?p=student_add");
    }
    