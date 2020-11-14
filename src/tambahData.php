<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </head>
  <body>
  <div class="container">
  <?php
    include 'controller/connectDb.php';
  ?>
  <div class="col-xl-12">
    <div class="jumbotron" style="text-align: center; background: 0 !important;">
      <h1>Tambah Data</h1>
    </div>
  </div>
  <div class="col-xl-12">
  <form class="" action="controller/create.php" method="post" >
    <table style="text-align:center;" class="table table-condensed">
      <tr>
        <td> Nama Produk :  </td>
        <td>  <input type="text" name="nama_produk" placeholder="Masukan Nama Produk"> </td>
      </tr>
      <tr>
        <td> Keterangan :</td>
        <td><input type="text" name="keterangan" placeholder="Masukan Keterangan"></td>
      </tr>
      <tr>
        <td>Harga : </td>
        <td><input type="number" name="harga" placeholder="Masukan Harga"></td>
      </tr>
      <tr>
        <td>Jumlah :</td>
        <td><input type="number" name="jumlah" placeholder="Masukan Jumlah"></td>
      </tr>
      <tr>
        <td colspan="2"> <input type="submit" value="Tambah" class="btn btn-success" style="width:110px;">
          <input type="reset" class="btn btn-danger" style="width:110px;"> </td>
      </tr>
    </table>
  </form>
  <a href="index.php">Kembali</a>
</div>
</div>
  </body>
</html>
