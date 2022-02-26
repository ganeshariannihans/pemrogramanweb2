<?php
  $mahasiswa = [
    ["id" => 1,"nama" => "ganesha", "nim" => "0110221231", "uts" => 90, "uas" => 90],
    ["id" => 2,"nama" => "fayyaza", "nim" => "011022211", "uts" => 80, "uas" => 80],
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
  </thead>

  <tbody>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $mhs["id"] ?></td>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["nim"] ?></td>
          <td><?= $mhs["uts"] ?></td>
          <td><?= $mhs["uas"] ?></td>
      </tr>
 
     <?php endforeach; ?>
      </tbody>
    </table>
</body>
</html>