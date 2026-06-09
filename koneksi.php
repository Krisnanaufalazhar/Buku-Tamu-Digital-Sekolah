<?php

$koneksi = mysqli_connect(
"localhost",
"root",
"",
"db_bukutamu"
);

if(!$koneksi){
die("Koneksi gagal");
}

?>