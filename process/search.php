<?php 

    include "../config/config.php";

    $keyword = $_POST["keyword"];

    if(!empty($keyword))
    {
        // keyword awal = "Aries Dimas";
        $keyword = str_replace(" ","-",$keyword);
        // keyword output  = "Aries-Dimas";
        // redirect 
        header("location:".$base_url."index.php/?p=student&s=$keyword");

    }else
    {

    }