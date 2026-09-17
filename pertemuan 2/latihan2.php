<?php 
// Inisiasi variabel nama peralatan
$brg1 = "Buku"; 
$brg2 = "Mouse"; 
$brg3 = "FlashDisk"; 
$brg4 = "Pulpen"; 

// Harga per unit peralatan 
$harga1 = 17500; 
$harga2 = 30000; 
$harga3 = 70000; 
$harga4 = 22300; 

// Jumlah peralatan yang dibeli 
$jmlbrg1 = 2; 
$jmlbrg2 = 5; 
$jmlbrg3 = 1; 
$jmlbrg4 = 3; 

// Total harga per jenis peralatan (Jumlah x Harga Satuan)
$th1 = $jmlbrg1 * $harga1; 
$th2 = $jmlbrg2 * $harga2; 
$th3 = $jmlbrg3 * $harga3; 
$th4 = $jmlbrg4 * $harga4; 

// Hitung grand total seluruh nilai peralatan 
$tharga = $th1 + $th2 + $th3 + $th4; 

// Besar diskon dalam persen
$diskon = 5; 

// Jumlah total nominal diskon yang diberikan 
$tdiskon = ($diskon * $tharga) / 100; 

// Jumlah bersih yang harus dibayar 
$tdibayar = $tharga - $tdiskon; 
?>

<!DOCTYPE html>
<html> 
<head> 
    <title>Daftar Peralatan Yang Dibeli</title> 
    <style type="text/css">  
        body {	  
            font-size: 14pt;  
            font-family: Arial, sans-serif;
        }  
        table {	
            font-size: 12pt; /* Disesuaikan agar ukuran tabel lebih proporsional */
            width: 60%;
        } 
    </style>
</head> 
<body> 
<center> 
    <font face="comic sans serif" size="5" color="blue">Contoh Perhitungan dengan PHP</font>
    <br><br>
    
    <table border="1" cellspacing="0" cellpadding="5"> 
        <tr> 
            <td colspan="4" align="center" valign="middle"> 
                <b>Daftar Pemesanan Peralatan Kantor</b> 
            </td> 
        </tr> 
        <tr bgcolor="#cccccc"> 
            <td><b>Nama Peralatan</b></td> 
            <td align="center"><b>Jumlah</b></td> 
            <td align="right"><b>Harga Satuan</b></td> 
            <td align="right"><b>Jumlah Harga</b></td> 
        </tr> 
        
        <!-- Baris Barang 1 -->
        <tr> 
            <td align="left"><?php echo $brg1; ?></td> 
            <td align="center"><?php echo $jmlbrg1; ?></td> 
            <td align="right"><?php echo number_format($harga1, 0, ',', '.'); ?></td> 
            <td align="right"><?php echo number_format($th1, 0, ',', '.'); ?></td> 
        </tr> 
        
        <!-- Baris Barang 2 -->
        <tr> 
            <td align="left"><?php echo $brg2; ?></td> 
            <td align="center"><?php echo $jmlbrg2; ?></td> 
            <td align="right"><?php echo number_format($harga2, 0, ',', '.'); ?></td> 
            <td align="right"><?php echo number_format($th2, 0, ',', '.'); ?></td> 
        </tr> 
        
        <!-- Baris Barang 3 -->
        <tr> 
            <td align="left"><?php echo $brg3; ?></td> 
            <td align="center"><?php echo $jmlbrg3; ?></td> 
            <td align="right"><?php echo number_format($harga3, 0, ',', '.'); ?></td> 
            <td align="right"><?php echo number_format($th3, 0, ',', '.'); ?></td> 
        </tr> 
        
        <!-- Baris Barang 4 -->
        <tr> 
            <td align="left"><?php echo $brg4; ?></td> 
            <td align="center"><?php echo $jmlbrg4; ?></td> 
            <td align="right"><?php echo number_format($harga4, 0, ',', '.'); ?></td> 
            <td align="right"><?php echo number_format($th4, 0, ',', '.'); ?></td> 
        </tr> 
        
        <!-- Baris Total, Diskon, dan Grand Total -->
        <tr> 
            <td colspan="3" align="right"><b>Total Harga</b></td> 
            <td align="right"><b><?php echo number_format($tharga, 0, ',', '.'); ?></b></td> 
        </tr> 
        <tr> 
            <td colspan="3" align="right">Diskon <?php echo "( $diskon % )"; ?></td> 
            <td align="right"><?php echo number_format($tdiskon, 0, ',', '.'); ?></td> 
        </tr> 
        <tr bgcolor="#e6f2ff"> 
            <td colspan="3" align="right"><b>Jumlah harus dibayar</b></td> 
            <td align="right"><b><?php echo number_format($tdibayar, 0, ',', '.'); ?></b></td> 
        </tr> 
    </table> 
</center> 
</body> 
</html>

