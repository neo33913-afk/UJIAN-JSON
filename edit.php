<?php

include "koneksi.php";

$id = $_POST['id'];
$name = $_POST['name'];
$nisn = $_POST['nisn'];
$ttl = $_POST['ttl'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = mysqli_query($koneksi, "UPDATE users SET
name='$name',
nisn='$nisn',
ttl='$ttl',
gender='$gender',
email='$email',
address='$address'
WHERE id='$id'");

if ($query) {
    echo "Data berhasil diubah";
} else {
    echo "Gagal mengubah data";
}