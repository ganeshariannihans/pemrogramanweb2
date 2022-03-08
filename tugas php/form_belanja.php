<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<style>
    
   body {
     background-color: beige;
   }
</style>

    
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Belanja Online</a>
    </div>
</nav>

<form action="form_belanja.php" method="POST">
    <div class="form-group row">
        <label for="customer" class="col-4 col-form-label">Customer</label>
        <div class="col-8">
            <input id="customer" name="customer" type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-4">Pilihan Produk</label>
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci">
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
        <input type="submit" class="btn-success" name="kirim">
        </div>
    </div>
</form>

    </div>
    <div class="float-right">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
          <div class="list-group-item">
              <p class="list-group-item">
              TV : 4.200.000
              </p>
          </div>

          <div class="list-group-item">
              <p class="list-group-item">
                Kulkas : 3.100.000
              </p>
         </div>

           <div class="list-group-item">
              <p class="list-group-item">
                 Mesin Cuci : 3.800.000
              </p>
            </div>

                <a href="#" class="list-group-item list-group item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>

            </div>
        </div>
    </div>
</div>
<hr>

<?php

$kirim = $_POST['kirim'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

 if($produk=="tv"){
   $hargatv = 4200000;
   $total = $hargatv * $jumlah;
}elseif($produk=="kulkas"){
   $hargakulkas = 3100000;
   $total = $hargakulkas * $jumlah;
}elseif($produk=="mesin cuci"){
    $hargamesincuci = 3800000;
    $total = $hargamesincuci * $jumlah;
}else{
    $total = 0;
}

    
echo '<ol class="list-group list-group-numbered">';
echo '<li class="list-group-item">Nama Customer : ' . $customer . '</li>';
echo '<li class="list-group-item">Nama Produk : ' . $produk . '</li>';
echo '<li class="list-group-item">Jumlah : ' . $jumlah . ' </li>';
echo '<li class="list-group-item">Total Harga : ' . $total . '</li>';
echo '</ol>';

    ?>
</body>
</html>