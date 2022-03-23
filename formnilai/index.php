<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" 
    href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" 
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    
</head>
<body>
    <div class="container">

<table id="example" class="table table-striped table-bordered">
    <thead>
        
        <tr>
        <th>no</th>
        <th>nim</th>
        <th>nama</th>
        <th>prodi</th>
        <th>thn angkatan</th>
        <th>ipk</th>
        <th>predikat</th>
        <th></th>
    </tr>
</thead>
<tbody>

    <?php
    include 'koneksi.php';
    $mhs = mysqli_query($koneksi, 'select * from mahasiswa');

    $no = 1;
    while ($row = mysqli_fetch_array($mhs)) {
        ?>
        <tr>
    
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['prodi']; ?></td>
            <td><?php echo $row['thn_angkatan']; ?></td>
            <td><?php echo $row['ipk']; ?></td>
            <td><?php if ($row['ipk'] < 2.0) {
                        echo "Cukup";
                    }  elseif ($row['ipk'] >= 2.0 && $row['ipk'] <= 3.0) {
                        echo "Baik";
                    }  elseif ($row['ipk'] >= 3.0 && $row['ipk'] <= 3.75) {
                        echo "Memuaskan";
                    }  elseif ($row['ipk'] >= 3.75 && $row['ipk'] <= 4.0) {
                        echo "Cum Laude";
                    }  else echo "Tidak Lulus"; ?></td>
                    <td></td>
            </tr>
            <?php } ?>
         </tbody>

    </table>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
});
        </script>
    </div>

</body>
</html>