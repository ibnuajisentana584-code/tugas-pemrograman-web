<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan Switch - Case</title>
</head>
<body>
    <h3>Jadwal Kegiatan Hari Ini:</h3>
    <?php
    $nama_hari = date("l"); 

    switch ($nama_hari) {
        case "Sunday":
            print("<b>Minggu</b> <br>");
            print "Waktu untuk istirahat";
            break;
        case "Monday":
            print("<b>Senin</b> <br>");
            print "Meeting awal minggu jam 08.00";
            break;
        case "Tuesday":
            print("<b>Selasa</b> <br>");
            print "Pembukaan Workshop Diklat";
            break;
        case "Wednesday":
            print("<b>Rabu</b> <br>");
            print "Seminar Launching Windows Vista di JHCC";
            break;
        case "Thursday": // Perbaikan penulisan dari "Thrusday" menjadi "Thursday"
            print("<b>Kamis</b> <br>");
            print "Pertemuan dengan Mahasiswa";
            break;
        case "Friday":
            print("<b>Jumat</b> <br>");
            print "Jogging bersama";
            break;
        default:
            print("<b>Sabtu</b> <br>");
            print "Survey harga ke Dusit, Mangga Dua";
            break;
    }
    ?>
</body>
</html>
