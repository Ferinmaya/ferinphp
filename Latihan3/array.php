<?php
//array
//variabel yang dapat memiliki banyak nilai 
//elemen pada array boleh memiliki tipe data yang berbeda 
// pasangan antara key dan value 
// key-nya adalah index, yang dimulai dari 0

//membuat array
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");
//cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false ];

//Menampilkan Array 
// var-dump() / print-r()
// var_dump($hari);
// echo "<br>";
// ptint_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array 
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]


// menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);

?>