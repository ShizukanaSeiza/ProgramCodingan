<html>
    <head>
        <title>
            Operator Logika
        </title>
    </head>
    <body>
        <h3>Operator AND / &&</h3>
        <p>Hasil nya akan TRUE jika keduanya benar</p>

        <?php
            $x = 100;
            $y = 50;

            if($x == 100 AND $y == 50){
                echo "Benar";
            }
        ?>

        <h3>OR / ||<</h3>
        <p>Hasil nya akan TRUE jika salah satunya benar / Kedua nya Benar</p>

        <?php
            $x = 100;
            $y = 150;

            if($x == 100 OR $y == 50){
                echo "TRUE : Salah Satu nya Benar";
            }else{
                echo "FALSE : Kedua nya Benar";
            }
        ?>

        <h3>XOR</h3>
        <p>Hasil nya akan TRUE jika salah satu nya benar, Tapi tidak keduanya benar</p>

        <?php
            $x = 100;
            $y = 150;

            if($x == 100 XOR $y == 50){
                echo "TRUE : Salah satunya Benar";
            }else{
                echo "FALSE : Kedua nya Benar";
            }
        ?>

        <h3>! (not)</h3>
        <p>|</p>
        <?php
            $x = 100;
            $y = 150;

            if(!($x == 100)){
                echo "TRUE : x adalah 100";
            }else{
                echo "FALSE : x bukan 100";
            }
        ?>
    </body>
</html> 