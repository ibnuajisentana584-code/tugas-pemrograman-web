<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$dbname = "lat_dbase";
$cek = mysqli_query($conn, "CREATE DATABASE $dbname");

if ($cek) {
    echo "Database $dbname berhasil dibuat";
} else {
    echo "Couldn't Create Database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>