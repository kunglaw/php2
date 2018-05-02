<?php

    session_start();

    include "../config/config.php";
    include "../config/koneksi.php";

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $str = "SELECT * FROM admin_tbl WHERE email = '$email' AND password = '$password'";
    $q = mysqli_query($connect,$str);
    $f = mysqli_fetch_array($q,MYSQLI_ASSOC);

    if(!empty($f))
    {
        $_SESSION["name"]  = $f["name"];
        $_SESSION["email"] = $email;

        header("location:"."http://localhost/php2/"."index.php");
    }

    

?>