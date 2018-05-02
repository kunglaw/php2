<?php

    /*

        while(kondisi){ // aksi  }
        do{ // aksi }while(kondisi)

        for( kondisi){ //aksi }
        foreach(){ //aksi  }

     */
     $x = 0;
     while($x < 10) // kalau kondisi nya benar terus. itu dinamakan forever looping 
     {
        echo $x." <br> ";

        $x++;
        // kalau aksi terakhir sudah dijalankan , maka dia balik lagi ngecek 
     }
     echo "<hr> ";
     do{
        echo $x." <br>";

        $x++;
     }while($x < 20);

     $y = 0;
          // 1      //2     //3
     for($i = $y; $i <= 10; $i++)
     {
         echo "for: $i <br>";
        // lakukan 
     }

     // echo $i; // 11 