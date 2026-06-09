<?php

include 'koneksi.php';

$total =
mysqli_num_rows(
mysqli_query(
$koneksi,
"SELECT * FROM buku_tamu"
)
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Daftar Tamu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f7ff;
}

.stat{
background:
linear-gradient(
135deg,
#2563eb,
#7c3aed
);
color:white;
padding:20px;
border-radius:20px;
}

</style>

</head>
<body>

<div class="container py-5">

<div class="stat mb-4">

<h2>Total Tamu</h2>

<h1><?= $total ?></h1>

</div>

<div class="card shadow-lg">

<div class="card-body">

<form method="GET">

<input
type="text"
name="cari"
class="form-control mb-3"
placeholder="Cari Nama atau Instansi">

</form>

<table
class="table table-striped table-hover">

<tr>

<th>No</th>
<th>Nama</th>
<th>Instansi</th>
<th>Tujuan</th>
<th>Tanggal</th>
<th>Waktu</th>

</tr>

<?php

$no=1;

if(isset($_GET['cari'])){

$cari=$_GET['cari'];

$data=mysqli_query(
$koneksi,
"SELECT * FROM buku_tamu
WHERE nama LIKE '%$cari%'
OR instansi LIKE '%$cari%'"
);

}else{

$data=mysqli_query(
$koneksi,
"SELECT * FROM buku_tamu
ORDER BY id DESC"
);

}

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td><?= $no++ ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['instansi'] ?></td>
<td><?= $d['tujuan'] ?></td>
<td><?= $d['tanggal'] ?></td>
<td><?= $d['waktu'] ?></td>

</tr>

<?php } ?>

</table>

<a
href="index.php"
class="btn btn-primary">

Tambah Tamu

</a>

</div>

</div>

</div>

</body>
</html>