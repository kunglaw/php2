<?php
    //$_FILES;
    $arr = array(

        "data1" => array("name"=>"dimas",
        "profesi"=>"instruktur"),
        "data2" => array("name"=>"david",
        "profesi"=>"instruktur"),

    );
          //$_FILES["photo"]["name"]
    echo $arr["data1"]["name"];
    echo "<br>";
    
    // $file = $_FILES["photo"] 
    $data1 = $arr["data1"];

    //   $file["name"]
    echo $data1["name"];

    //$_FILES["photo"];