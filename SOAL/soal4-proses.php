<html>
    <head>
        <title>Hasil Pendaftaran Mahasiswa</title>
    </head>
    <body>
        <h1>Hasil Pendaftaran Mahasiswa Baru</h1>
        
        <?php
        $nama    = $_GET['nama'];
        $tempat  = $_GET['tempat'];
        $tgl     = $_GET['tgl'];
        $bln     = $_GET['bln'];
        $thn     = $_GET['thn'];
        $alamat  = $_GET['alamat'];
        $jk      = $_GET['jk'];
        $asal    = $_GET['asal'];
        $nilai   = $_GET['nilai'];

        echo "<p>Terimakasih <b>$nama</b> sudah mengisi form pendaftaran.</p>";
        echo "<table>";
        echo "<tr><td>Nama Lengkap</td><td>:</td><td>$nama</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>$tempat</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>$tgl - $bln - $thn</td></tr>";
        echo "<tr><td>Alamat Rumah</td><td>:</td><td>$alamat</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td></tr>";
        echo "<tr><td>Asal Sekolah</td><td>:</td><td>$asal</td></tr>";
        echo "<tr><td>Nilai UAN</td><td>:</td><td>$nilai</td></tr>";
        echo "</table>";
        ?>
    </body>
</html>
