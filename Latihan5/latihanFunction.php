<html>
    <?php
    // function adalah satu blok perintah yang bisa digunakan berulang kali

    function pesanku(){
        echo "Hello, ini pesan ku";
    }

    pesanku();

    function tampilAngka($nilai){
        echo "<br>";
        echo "My Nilai Adalah : ".$nilai . "<br>";
        echo "nilaiku dibagi 2 Adalah : ". $nilai/2 ."<br>"; 
    }

    tampilAngka(100);
    tampilAngka(80);
    tampilAngka(60);
    tampilAngka(40);
    tampilAngka(20);

    function tampilNama($nama){
        echo "<br>";
        echo "<h3>Nama Saya Adalah ".$nama."</h3>";
    }

    tampilNama('Furina De Fontaine');

    function aseKrw($mhs,$nik){
        echo "<br>";
        echo $mhs. " aseKrw-nik :".$nik;
    }

    aseKrw('Furina','2006');
    aseKrw('Hina','2005');
    aseKrw('Zeta','2006');
    aseKrw('Moona','2005');

    function tampilNamaTahun($nama){
        echo "<br>";
        echo "<h3>Saya Lahir Dikarawang Nama Saya Adalah ".$nama."</h3>";
    }

    tampilNamaTahun('Shizukana Seiza','Vynaa Mizuno');

    function NamaSayaLahir($nama,$tahun){
        echo "<br>";
        echo $nama. " Nama Saya Lahir Pada Tahun : ".$tahun;
    }

    NamaSayaLahir('Seiza','2006');
    NamaSayaLahir('Vynaa','2006');
    echo "<br>";

    function tinggibangunan($minheight = 10){
        echo "<br>";
        echo "Tinggi Gedung : ".$minheight."meter";
    }

    tinggiBangunan(300);
    tinggiBangunan();
    tinggibangunan(20);
    tinggibangunan(40);

    echo "<br>";
    function sum($x,$y){
        echo $x. " + " .$y ." = ";
        $z = $x + $y ;
        echo $z."<br>";
    }
    
    echo "<br>";
    sum(3,2);
    sum(4,5);
    sum(7,8);
    sum(6,9);
    sum(9,4);
    echo "<br>";
    
    function BeratBarang($minweight = 60){
        echo "<br>";
        echo "Berat Barang : ".$minweight. "kg";
    }

    BeratBarang(15);
    BeratBarang(25);
    BeratBarang();
    BeratBarang(35);
    BeratBarang(45);
    echo "<br>";

    function LuasSegitiga($s,$v){
        echo "<br>";
        echo "<b>Rumus Luas Segitiga</b>". "<br>";
        echo "1/2 * $s * $v";
        echo "<br>";
        echo "1/2". " * ". $s. " * ". $v. " = ";
        $q = 1/2*$s * $v;
        echo $q. "<br>";
    }

    LuasSegitiga(6,4);
    echo "<br>";

    function LuasPersegi($k,$j){
        echo "<br>";
        echo "<b>Rumus Luas Persegi</b>". "<br>";
        echo $k. " * " .$j ." = ";
        $h = $k * $j;
        echo $h. "<br>";
    }

    echo "<br>";
    LuasPersegi(7,8);
    
    function LuasLingkaran($phi,$r){
        echo "<br>";
        echo "<b>Rumus Luas Lingkaran</b>". "<br>";
        echo $phi. " * " .$r . " = ";
        $L = $phi * $r;
        echo $L. "<br>";
    }

    echo "<br>";
    LuasLingkaran(3.14,21);
    ?>
</html>