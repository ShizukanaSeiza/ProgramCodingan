<html>
    <head>
        <title>Operator Aritmatika</title>
    <head>
    <Body>
        <h3>Latihan Penjumlahan</h3>   
        <?php
            // operator PHP - biasa digunakan untuk operasi aritmatika
            // + , -, * , / , % , ** , , =
           
            $nilai1 = 5;
            $nilai2 = 10;

            $nilai1 += 20;
            echo "operator + = nilai1 adalah ".$nilai1."<br>";

            $penjumlahan = $nilai1+$nilai2;
            // echo $penjumlahan;
            // 5 + 10 + 15
            echo $nilai1." + 10 = ".$penjumlahan;


        ?>

        <h3>Pengurangan</h3>
        <?php   
             $x = 20;
             $y = 4;

            
            $x -= 14;
            echo "operator - = x adalah ".$x."<br>";
            
            $pengurangan = $x-$y;
            echo $x.' - '.$y.' = '.$pengurangan;
        ?>

        <h3>Perkalian</h3>
        <?php   
            $a=15;
            $b=5;

            $perkalian = $a * $b;
            echo $a.' * '.$b.' = '.$perkalian;
        ?>

        <h3>Pembagian</h3>
        <?php
            $a=16;
            $b=4;

            $pembagian = $a / $b;
            echo $a.' / '.$b.' = '.$pembagian;
        ?>

        <h3>% Sisa Bagi</h3>
        <?php
            $d=20;
            $e=5;
            
            $sisabagi = $d % $e;
            $hasilbagi = $d / $e;

            echo "d = ".$d.", e = ".$e." sisabagi = ".$sisabagi.", hasilbagi = ".$hasilbagi;
        
        ?>

        <h3>** exponential</h3>
        <?php
            $x = 5;
            $y = 2;
            $exp = $x ** $y;
            echo "hasil ".$x." ** ".$y."= ".$exp;
        ?>
    </body>
</html>
