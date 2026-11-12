<?php 
// Cek apakah tombol Submit sudah ditekan
if ($_POST['Submit'] == "Submit") {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon']; 

    // Validasi: Cek apakah ada data yang kosong
    if (empty($_POST['id_mahasiswa']) || empty($_POST['nama']) || empty($_POST['alamat']) || empty($_POST['telepon'])) { 
        ?>
        <script language="JavaScript">
            alert('Data Harap Dilengkapi!');
            document.location='form-input.php'; // Sesuaikan dengan nama file form Anda
        </script>
        <?php 
    } else {
        // Panggil file koneksi database
        include "../../koneksi-tutor.php"; 

        // Cek apakah NIM sudah terdaftar di database
        $cek = mysql_num_rows(mysql_query("SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$_POST[id_mahasiswa]'"));
        
        if ($cek > 0) { 
            ?>
            <script language="JavaScript">
                alert('NIM sudah dipakai!, silahkan ganti NIM yang lain');
                document.location='form-input.php';
            </script>
            <?php 
        } else {
            // Perintah SQL untuk memasukkan data ke tabel mahasiswa
            $input = "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon) VALUES ('$id_mahasiswa', '$nama', '$jurusan', '$alamat', '$telepon')";
            $query_input = mysql_query($input);

            if ($query_input) { 
                // Jika Berhasil 
                ?>
                <script language="JavaScript">
                    alert('Input Data Mahasiswa Berhasil');
                    document.location='form-input.php';
                </script>
                <?php 
            } else { 
                // Jika Gagal 
                echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            } 

            // Tutup koneksi database MySQL
            mysql_close($Open);
        } 
    } 
} 
?>