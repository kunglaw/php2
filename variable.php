<?php 

    // variable adalah untuk menyimpan nilai/value
    // aturan dalam membuat nama variable, tidak boleh diawali dengan angka, 
    // tidak boleh selain angka,alphabet, dan underscore

    /*
        tipe data

        string = angka,tulisan 
        int = angka saja
        float = decimal
        boolean = true / false 
        array
        object
        null
        
    */
    # ini juga comment 

$kalimat = "12"+12; // "12" dianggap int oleh php  
$nama = "Aries Dimas Yudhistira";
$nama = "David"; // $nama nilainya berubah jadi "David"
$nama2 = "Fadil";
// echo $nama.$nama2;

echo $cerita = "$nama pergi ke mall <br>"; // kutip2 
echo '$nama pergi ke mall <br>'; // kutip satu

//echo $kalimat; 
$angka = 99; // type data int

// function 
  // function bawaan php 
  // function buatan sendiri 
$panjang_kata = strlen($nama); // strlen() adalah function bawaan php

/* function strlen()
{

}*/
 
echo $nama;

 // variable konstant / tetap 

 define("ALAMAT","jl. warakas"); // pendefinisian variabel konstant
 echo "<br>";
 echo ALAMAT; // menampilkan variable konstant
