<?php 

    // perbandingan 
    // mengolah logic 
    /*
        if(kondisi){ jalankan }
        switch() case : jalankan 
    */
    $cuaca = "cerah";
    
    // jika cuaca hujan maka bawa payung 
    if($cuaca != "hujan") // selama kondisi disini true
    {
        echo "bawa payung"; // maka jalankan ini 
    }
    else if ($cuaca == "cerah")
    {
        echo "pakai sunscreen";
    }
    else{
        echo "jalan saja <br>";
    }

    if(12 == "12")
    {
        echo "sama secara value saja <br>";
    }
    if(12 === 12)
    {
        echo "sama secara value dan type <br>";
    }
    
    if($cuaca != "berawan") // negasi
    {
        echo "naik motor";
    }
    
    $kondisi_pc = false;
    if(!$kondisi_pc) // negasi
    {
        echo "main game <br> ";
    }

    // == membandingkan 2 value 
    // === membandingkan 2 value beserta type variable nya 


    // switch
    switch($cuaca)
    {
        case "cerah" : // ( $cuaca == "cerah") { echo "switch : naik motor <br> "; }
            echo "switch : naik motor <br> ";
       
        case $cuaca == "berawan" : // walaupun kondisi salah tetap dijalankan 
            echo "switch : naik mobil <br>";
        break;
        default: // else 
            echo "switch : jalan kaki saja";
    }