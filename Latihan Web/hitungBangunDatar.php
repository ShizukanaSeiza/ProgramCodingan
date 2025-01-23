<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar</title>
</head>
<body>
    <h3>Bangun Datar</h3>
    <?php
        function bangunDatar($typeBangunDatar,$value1,$value2 = 0){
            switch($typeBangunDatar){
                case 1:
                    echo "Segitiga";
                    echo "<br> Luas : ".hitungSegitiga($value1,$value2);
                    // Input a,t
                break;
                case 2:
                    echo "Persegi";
                    echo "<br> Luas : ".hitungPersegi($value1);
                    // Input s
                break;
                case 3:
                    echo "Lingkaran";
                    echo "<br> luas : ".hitungLingkaran($value1);
                    // Input Jari Jari
                break;
                case 4:
                    echo "Belah Ketupat";
                    echo "<br> luas : ".hitungBelahKetupat($value1);
                    // input Diagonal
            } 
        }

            bangunDatar(3,45,17);

            

        function hitungSegitiga($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }
        function hitungPersegi($sisi) {
            return $sisi * $sisi;
        }
        function hitungLingkaran($radius) {
            return 3.14 * $radius * $radius;
        }
        function hitungBelahKetupat($value1) {
            return 0.5 * $d1 * $d2;
        }
        ?>
    </body>
</html>