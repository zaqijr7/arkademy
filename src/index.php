<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <?php
      include 'controller/connectDb.php';
    ?>
</head>

<body>
<div class="container">
  <div class="col-xl-12">
    <div class="jumbotron" style="text-align: center; background: 0 !important;">
    <h1>Data Barang</h1>
  </div>

  <div class="col-xl-12">
    <table style="text-align:center;" class="table table-striped">
      <tr>
        <td>Nama produk</td>
        <td>Keterangan</td>
        <td>Harga</td>
        <td>Jumlah</td>
        <td>Aksi</td>
      </tr>

      <?php
  // Perintah untuk menampilkan data
  $sql= "SELECT * FROM produk";
  $query = mysqli_query($koneksi, $sql);
  // perintah untuk membaca dan mengambil data dalam bentuk array
  while ($row = mysqli_fetch_array($query)){
   echo "
          <tr>
          <td>".$row['nama_produk']."</td>
          <td>".$row['keterangan']."</td>
          <td>".$row['harga']."</td>
          <td>".$row['jumlah']."</td>
          <td> <a href='controller/delete.php?id=". $row['id'] ."' class='btn btn-danger'> Delete </a>
             <a href='formUpdate.php?id=" . $row['id'] . "' class='btn btn-info'> Update </a>
          </td>
          </tr>";
        }
  ?>

      </td>
      </tr>
    </table>
    <a href="tambahData.php" class="btn btn-success"> Tambah Data </a>
    </div>
    </div>
  </div>
</body>

</html>
