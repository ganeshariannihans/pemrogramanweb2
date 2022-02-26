<?php

// $mahasiswa = 'ganesha';
$mahasiswa = ['ganesha', 'fayyaza'];

echo $mahasiswa[0];
echo "<br />";
echo $mahasiswa[1];
echo "<br />";
// var_dump($mahasiswa); 
// perulangan

// foreach ($mahasiswa as $mhs) {
  //  echo "<h1 style='color: green'>$mhs</h1>";
 //   echo "<br />";
// }

$mahasiswa = [
   ["nama" => "ganesha", "nim" => "0110221231", "uts" => 80, "uas" => 100],
   ["nama" => "fayyaza", "nim" => "0110221232", "uts" => 80, "uas" => 100],

];

echo $mahasiswa[0]["nama"]; 
foreach ($mahasiswa as $mhs) {
}
?>