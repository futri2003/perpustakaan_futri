<?php 
    include "../../config/koneksi.php";

$id_transaksi= $_POST['id_transaksi'];
$tanggal_transaksi= $_POST['tanggal_transaksi'];
$id_anggota = $_POST['id_anggota '];
$id_buku = $_POST['id_buku  '];
$quantity= $_POST['quantity'];
$jenis_transaksi= $_POST['jenis_transaksi'];


$sql = "INSERT INTO tabel_transaksi
(
id_transaksi,
tanggal_transaksi,
id_anggota,
id_buku,
quantity,
jenis_transaksi
)
VALUES
(
'".$id_transaksi."',
'".$tanggal_transaksi."',
'".$id_anggota."',
'".$id_buku."',
'".$quantity."',
'".$jenis_transaksi."'
)";

$db->query($sql);


header('Location: ../../beranda.php?page=transaksi');

?>