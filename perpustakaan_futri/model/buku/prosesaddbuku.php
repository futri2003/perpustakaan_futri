<?php 
    include "../../config/koneksi.php";

$id_buku = $_POST['id_buku'];
$isbn = $_POST['isbn'];
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit= $_POST['penerbit'];
$tahun_terbit= $_POST['tahun_terbit'];


$sql = "INSERT INTO tabel_buku
(
id_buku,
isbn,
nama_buku,
penulis,
penerbit,
tahun_terbit
)
VALUES
(
'".$id_buku."',
'".$isbn."',
'".$nama_buku."',
'".$penulis."',
'".$penerbit."',
'".$tahun_terbit."'
)";

$db->query($sql);


header('Location: ../../beranda.php?page=buku');

?>