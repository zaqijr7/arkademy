<?php
include 'connectDb.php';

$id = $_GET['id'];
// sql hapus
$sql = "DELETE FROM produk WHERE id='$id' ";

if ($koneksi->query($sql) === TRUE) {
    header("location:\src/index.php?pesan=hapus");
} else {
    echo "Gagal Hapus, Ket : " . $koneksi->error;
}

 ?>
