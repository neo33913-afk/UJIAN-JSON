<?php

include "koneksi.php";

$name = $_POST['name'];
$nisn = $_POST['nisn'];
$ttl = $_POST['ttl'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = mysqli_query($koneksi, "INSERT INTO users
(name, nisn, ttl, gender, email, address)
VALUES
('$name', '$nisn', '$ttl', '$gender', '$email', '$address')");

if ($query) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data";
}