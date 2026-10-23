<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase"); // koneksi dan langsung pilih database
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";
mysqli_query($conn, $sql);

// input data
$input = mysqli_query($conn, "INSERT INTO tbl_mhs(FirstName, LastName, Age) VALUES('Anjar', 'Prabowo', 25)");

if ($input) {
    echo "Tabel berhasil dibuat dan data berhasil dimasukkan.";
} else {
    echo "Gagal memasukkan data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>