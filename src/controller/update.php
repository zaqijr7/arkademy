<?php
include 'connectDb.php';
$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$ket = $_POST['keterangan'];
$hrg = $_POST['harga'];
$jml = $_POST['jumlah'];

$sql = "UPDATE produk SET nama_produk='$nama', keterangan='$ket', harga='$hrg', jumlah='$jml' WHERE id='$id' ";

if ($koneksi->query($sql) === TRUE) {
  header("location:\src/index.php?pesan=berhasil-update");
} else {
     echo "gagal";
}

 ?>
