<?php

include 'koneksi.php';

$nama=$_POST['nama'];
$instansi=$_POST['instansi'];
$tujuan=$_POST['tujuan'];

date_default_timezone_set('Asia/Jakarta');

$tanggal = gmdate("Y-m-d", time()+7*3600);
$waktu   = gmdate("H:i:s", time()+7*3600);

mysqli_query(
$koneksi,
"INSERT INTO buku_tamu
(nama,instansi,tujuan,tanggal,waktu)
VALUES
('$nama','$instansi','$tujuan','$tanggal','$waktu')"
);

header("Location: daftar.php");