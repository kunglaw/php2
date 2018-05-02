<?php 

/*
    operator 

    + 
    - 
    / // bagi
    * // kali
    =
 
    % // modulus 
    >
    <
    == // perbandingan
    ! // negasi
*/
// pendefinisian variable
$angka1 = 100;
$angka2 = 25;

echo $angka1 + $angka2;
echo "<br>";
echo $angka1 - $angka2;
echo "<br>";
echo $angka1 * $angka2;
echo "<br>";
echo $angka1 / $angka2;
echo "<br>";
echo $angka1 % $angka2;
echo "<br>";
echo $angka1 > $angka2;
var_dump($angka1 > $angka2);
echo "<br>";
echo $angka1 < $angka2;
var_dump($angka1 < $angka2);

$angka1 += 200; // angka sebelum ditambah 200
$angka1 -= 50;
$angka1 *= 30;
$angka1 /= 100;
$angka1 %= 5;
$angka1++;
$angka1 = $angka1 * 45; // $angka1++; 
echo "<br>";
echo $angka1;