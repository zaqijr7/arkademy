<?php
include 'connectDb.php';
$nama = $_POST['nama_produk'];
$ket = $_POST['keterangan'];
$hrg = $_POST['harga'];
$jml = $_POST['jumlah'];

$sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah)
VALUES ('$nama', '$ket', '$hrg' , '$jml') ";

if ($koneksi->query($sql) === TRUE) {
  header("location:\src/index.php?pesan=berhasil");
} else {
     header("location:\src/index.php?pesan=gagal");
}



 ?>
