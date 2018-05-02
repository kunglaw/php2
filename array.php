<?php

    // array , tipe data 
    // yang bisa menampung lebih dari 1 value 

    $a = 10;
    $arr = array(10,20,45,15,24,34,90);

    echo $arr[1];
    $arr[2] = 70;
    // echo $arr[2];

    //print_r($arr);
    $arrName = array("name"=>"dimas","age"=>27,"profession"=>"web developer",33=>"hello");
    print_r($arrName);
    echo $arrName["profession"];
    $arrName["name"] = "david";
    print_r($arrName);
    echo"<br>";

    $arr[] = 64; // menambah data baru 
    unset($arr[3]); // hapus data array yg index nya 3

    foreach($arr as $k => $row)
    {
        echo "key : ".$k." , value : ".$row."<br>";
    }

    for($i=0;$i<=count($arr) -1;$i++)
    {
        echo "key : ".$i." , value : ".$arr[$i]."<br>";
    }