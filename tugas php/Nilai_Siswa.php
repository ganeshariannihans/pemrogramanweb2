<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<style>

   body {
     background-color: salmon ;
   }
</style>


<nav class="navbar navbar-light bg-succes">
   <div class="container-fluid">
       <a class="navbar-brand">Sistem Penilaian</a>
    </div>
</nav>

<form action="Nilai_Siswa.php" method="POST">
    <div class="form-group row">
        <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-4">
            <input id="Nama" name="Nama" type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row">
       <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label>
       <div class="col-4">
           <select id="Matkul" name="Matkul" class="custom-select">
               <option value="DDP">Dasar Dasar Pemrograman</option>
               <option value="BD1">Basis Data</option>
               <option value="WEB1">Pemrograman Web</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Nilai_Uts" class="col-4 col-form-label">Nilai UTS</label>
        <div class="col-4">
            <input id="Nilai_Uts" name="Nilai_Uts" type="number" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label for="Nilai_Uas" class="col-4 col-form-label">Nilai UAS</label>
        <div class="col-4">
            <input id="Nilai_Uas" name="Nilai_Uas" type="number" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label for="Nilai_Tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label>
        <div class="col-4">
            <input id="Nilai_Tugas" name="Nilai_Tugas" type="number" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" value="simpan" name="Proses"/>
        </div>
    </div>
</form>


<?php


$Proses = $_POST["Proses"];
$Nama = $_POST["Nama"];
$Matkul = $_POST["Matkul"];
$Nilai_Uts = $_POST["Nilai_Uts"];
$Nilai_Uas = $_POST["Nilai_Uas"];
$Nilai_Tugas = $_POST["Nilai_Tugas"];
$nilai_akhiruts = (int)$Nilai_Uts;
$nilai_akhiruas = (int)$Nilai_Uas;
$nilai_akhirtugas = (int)$Nilai_Tugas ;
$nilai_akhirsemester = ($nilai_akhiruts + $nilai_akhiruas + $nilai_akhirtugas) / 3;

 if($nilai_akhirsemester >=85 && $nilai_akhirsemester <=100){
    $hasil = "A";
    $hsl = "Lulus";
    $nilai = "Sangat Memuaskan";
}elseif($nilai_akhirsemester >=70 && $nilai_akhirsemester <=84){
    $hasil = "B";
    $hsl = "Lulus";
    $nilai = "Memuaskan";
}elseif($nilai_akhirsemester >=56 && $nilai_akhirsemester <=69){
    $hasil = "C";
    $hsl = "Lulus";
    $nilai = "Cukup";
}elseif($nilai_akhirsemester >=36 && $nilai_akhirsemester <=55){
    $hasil = "D";
    $hsl = "Tidak Lulus";
    $nilai = "Kurang";
}else{
    $hasil = "E";
    $hsl = "Tidak Lulus";
    $nilai = "Sangat Kurang";
}



echo '<ol class="list-group list-group-numbered">';
echo '<li class="list-group-item">Nama : ' . $Nama . '</li>';
echo '<li class="list-group-item">Mata Kuliah: ' . $Matkul . '</li>';
echo '<li class="list-group-item">Nilai UTS : ' . $Nilai_Uts . ' </li>';
echo '<li class="list-group-item">Nilai UAS : ' . $Nilai_Uas . '</li>';
echo '<li class="list-group-item">Nilai Tugas : ' . $Nilai_Tugas . '</li>';
echo '<li class="list-group-item">Hasil : ' . $hasil . '</li>';
echo '<li class="list-group-item">Anda Dinyatakan : ' . $hsl . '</li>';
echo '<li class="list-group-item">Nilai Anda: ' . $nilai . '</li>';
echo '</ol>';

?>

</body>
</html>