<?php

$conn = mysqli_connect("localhost", "root", "", "skill");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>