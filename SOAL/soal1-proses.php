<html>
    <head>
        <title>Hasil Perhitungan Saldo Akhir</title>
    </head>
    <body>
        <h1>Hasil Perhitungan Saldo Akhir Tabungan</h1>
        <?php
        $saldo_awal = $_POST['saldo_awal'];   // baca saldo awal
        $bunga = $_POST['bunga'];   // baca bunga dalam persen
        $bulan = $_POST['bulan'];   // baca lama menabung

        // hitung saldo akhir
        $saldo_akhir = $saldo_awal + ($saldo_awal * $bunga / 100 * $bulan);

        echo "<p>Saldo Awal : Rp. " . number_format($saldo_awal, 0, ',', '.') . "</p>"; 
        echo "<p>Bunga per Bulan : " . $bunga . " %</p>"; 
        echo "<p>Lama Menabung : " . $bulan . " bulan</p>"; 
        echo "<p><b>Saldo Akhir setelah $bulan bulan adalah Rp. " . number_format($saldo_akhir, 0, ',', '.') . "</b></p>"; 
        ?>
        </body>
</html>
