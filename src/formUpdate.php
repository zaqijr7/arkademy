<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </head>
  <body>
  <div class="container">
    <?php
    include 'controller/connectDb.php';
    // Perintah untuk menampilkan data
    $id = $_GET['id'];
    $sql= "SELECT * FROM produk WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    // perintah untuk membaca dan mengambil data dalam bentuk array di sebuah ID
    while ($row = mysqli_fetch_array($query)){
     ?>
  <div class="col-xl-12">
    <div class="jumbotron" style="text-align: center; background: 0 !important;">
    <h1>Update Data</h1>
    </div>
  </div>
  <div class="col-xl-12">
    <form class="" action="controller/update.php" method="post" >
      <input type="hidden" value="<?php  echo $row['id'];  ?>" name="id">
      <table style="text-align:center;" class="table table-condensed">
        <tr>
          <td> Nama Produk :  </td>
          <td>  <input type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>"> </td>
        </tr>
        <tr>
          <td> Keterangan :</td>
          <td><input type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>"></td>
        </tr>
        <tr>
          <td>Harga : </td>
          <td><input type="number" name="harga" value="<?php echo $row['harga']; ?>"></td>
        </tr>
        <tr>
          <td>Jumlah :</td>
          <td><input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>"></td>
        </tr>
        <tr>
          <td colspan="2"> <input type="submit" value="Tambah" class="btn btn-success" style="width:110px;">
            <input type="reset" class="btn btn-danger" style="width:110px;"></td>
        </tr>
      </table>
    </form>
    <a href="index.php">Batal</a>
<?php
}
?>
</div>
</div>
  </body>
</html>
