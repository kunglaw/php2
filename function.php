<?php 

    // function 
    // function bawaan php 
    // function buatan sendiri 
    /*
        function nama_function(parameter / input )
        {
            // aksi // proses

            return output
        }
    */
    // deklarasi function
    function cetak_angka_genap($x/*ini parameter atau input */)
    {
        for($i=1;$i<=$x;$i++)
        {
            if($i % 2 == 0)
            {
                echo $i;
                echo "<br>";
            }
        }
    }

    function luas_alas($p,$l)
    {
        return $p * $l;
    }

    function volume($luas,$tinggi)
    {
        return $luas * $tinggi;
    }

    function cetak_nama($name)
    {
        // nilai baik. atau output/result akhir dari function
        return "nama kamu : ".$name."<br>";
    }

    function kali($angka)
    {
        $result = $angka * 8;
        //return $result;
    }

    //calling function 
    cetak_angka_genap(20);
    echo "<hr>";
    cetak_angka_genap(40);

    $cetak_nama = cetak_nama("dimas");
    echo $cetak_nama;

    echo "<br>";
    echo kali(9) + 10;
    echo "<br>";
    // volume balok
    $luas = luas_alas(60,30);
    echo volume($luas,10);