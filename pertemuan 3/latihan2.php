<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan IF</title>
</head>
<body>
    <form method="GET" action="">  
        Besar Pembelian :  
        <input type="text" name="total_beli" value="<?php echo isset($_GET['total_beli']) ? htmlspecialchars($_GET['total_beli']) : ''; ?>"><br><br>  
        <input type="submit" value="Tentukan Diskon">
    </form>

    <?php  
    if (isset($_GET['total_beli']) && $_GET['total_beli'] !== '') { 
        $total_beli = intval($_GET['total_beli']); 
        $diskon = 0;

        if ($total_beli >= 200000) {
            $diskon = 0.1; 
        } else if ($total_beli >= 100000) {
            $diskon = 0.05; 
        } else {
            $diskon = 0.01; 
        }
            
        echo "<br><b>Hasil Perhitungan:</b><br>";
        printf("Diskon = Rp %s <br>\n", number_format($nominal_diskon, 0, ',', '.')); 
        printf("Pembayaran = Rp %s <br>\n", number_format($total_bayar, 0, ',', '.'));  
    }
    ?>
</body>
</html>
