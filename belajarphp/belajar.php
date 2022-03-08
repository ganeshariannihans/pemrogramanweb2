<?php
  // variable user
  $nama = 'Ganesha' ;
  $umur = 19;
  $berat = 53;

  $nama = 'Ganesha';

  echo ' Nama saya '. $nama.' umur saya '. $umur. ' berat saya '.$berat;
  echo "<br />";
  echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
  echo "<br />";

  // Variable sistem 
  // variable 
  echo 'Dokumen root '.$_SERVER['DOCUMENT_ROOT'];
  echo "<br />";

  // Variable konstan
  // adalah variable yang tidak bisa diubah nilainya 
  define('makanan', 'sushi');
  // define('makanan', 'jambu');
  echo '<h1 style="color: blue">'.makanan.'</h1>';
  echo makanan;
?>


