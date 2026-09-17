<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");

if ($query) {
    echo "Data berhasil dihapus";
} else {
    echo "Gagal menghapus data";
}