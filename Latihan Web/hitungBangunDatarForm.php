<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penghitung Luas Bangun Datar</title>
</head>
<body>
    <h3>Pilih Bangun Datar Favoritmu :</h3>
    <form action="" method="post">
    <select name="BangunDatar" id="">
        <option value="1">Segitiga</option>
        <option value="2">Persegi</option>
        <option value="3">Lingkaran</option>
        <option value="4">BelahKetupat</option>
    </select>
    <br>
    <button type="Submit">Pilih</button>
    </form>

    <?php
        function Segitiga()  {
            echo '<form action="" method="post">
                    <h3>Segitiga</h3>
                    <input type="hidden" name="bangunDatar" value="1">
                    <input type="text" name="alas" placeholder="Masukkan alas">
                    <input typr="text" name="tinggi" placeholder="Masukkan tinggi">
                    <button type="submit">Hitung</button>
             </form>';
        }
        function Persegi() {
            echo '<form action="" method="post">
                  <h3>Persegi</h3>
                  <input type="hidden" name="bangunDatar" value="2">
            <input type="text" name="sisi" placeholder="Masukkan sisi">
            <button type="submit">Hitung</button>
            </form>';
        }
        function lingkaran() {
            echo '<form action="" method="post">
                  <h3>Lingkaran</h3>
                  <input type="hidden" name="bangunDatar" value="3">
            <input type="text" name="jari" placeholder="Masukkan jari-jari">
            <button type="submit">Hitung</button>
            </form>';
        }
        function BelahKetupat() {
            echo '<form action="" method="post">
                  <h3>Belah Ketupat</h3>
                  <input type="hidden" name="bangunDatar" value="4">
            <input type="text" name="diagonal" placeholder="Masukkan diagonal">
            <button type="submit">Hitung</button>
            </form>';
        }
        function hitungSegitiga($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }
        function hitungPersegi($sisi) {
            return $sisi * $sisi;
        }
        function hitungLingkaran($radius) {
            return 3.14 * $radius * $radius;
        }
        function hitungBelahKetupat($diagonal) {
            return 0.5 * $diagonal * $diagonal;
        }
        if (!empty($_POST)) {
            $bangunDatar = $_POST['bangunDatar'];
            switch ($bangunDatar) {
                case '1':
                    Segitiga();
                    if (!empty($_POST['alas']) && !empty($_POST['tinggi'])) {
                        $alas = $_POST['alas'];
                        $tinggi = $_POST['tinggi'];
                        $luas = hitungSegitiga($alas, $tinggi);
                        echo "Luas Segitiga: $luas";
            }
        break;
        case '2':
            Persegi();
            if (!empty($_POST['sisi'])) {
                $sisi = $_POST{'sisi'};
                $luas = hitungPersegi($sisi);
                echo "Luas Persegi: $luas"; 
            }
        break;
        case '3':
            Lingakran();
            if (!empty($_POST['jari'])) {
                $jari = $_POST['jari'];
                $luas = hitungLingkaran($jari);
                echo "Luas Lingkaran: $luas";
            }
        break;
        case '4':
            BelahKetupat();
            if (!empty($_POST['diagonal'])) {
                $diagonal = $_POST['diagonal'];
                $luas = hitungBelahKetupat($diagonal);
                echo "Luas Belah Ketupat: $luas";
            }
        break;
        }
    }    
    ?>
</body>
</html>