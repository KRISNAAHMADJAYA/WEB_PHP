<html>
    <head>
        <title>Hasil Perhitungan Pecahan Uang</title>
    </head>
    <body>
        <h1>Hasil Pecahan Uang</h1>
        <?php
        $jumlahUang = $_POST['jumlahUang'];
        $sisa = $jumlahUang;

        $a = floor($sisa / 100000); $sisa %= 100000;
        $b = floor($sisa / 50000);  $sisa %= 50000;
        $c = floor($sisa / 20000);  $sisa %= 20000;
        $d = floor($sisa / 5000);   $sisa %= 5000;
        $e = floor($sisa / 100);    $sisa %= 100;
        $f = floor($sisa / 50);

        echo "<p>Jumlah uang: Rp " . number_format($jumlahUang, 0, ',', '.') . "</p>";
        echo "<p>Jumlah Rp. 100.000 : $a lembar</p>";
        echo "<p>Jumlah Rp. 50.000  : $b lembar</p>";
        echo "<p>Jumlah Rp. 20.000  : $c lembar</p>";
        echo "<p>Jumlah Rp. 5.000   : $d lembar</p>";
        echo "<p>Jumlah Rp. 100     : $e keping</p>";
        echo "<p>Jumlah Rp. 50      : $f keping</p>";
        ?>
    </body>
</html>
