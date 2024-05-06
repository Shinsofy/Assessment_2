<?php
// File: hapus_data.php

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pengelolaan_pegawai";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID yang akan dihapus dari parameter GET
$Id = $_GET['Id'];

// Hapus data dari tabel
$sql = "DELETE FROM pengelolaan_pegawai WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>