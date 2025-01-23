<html>
    <head>
        <title>
            Operator Perbandingan
        </title>
    </head>
    <body>
        <h3> == (Perbandingan Nilai)</h3>
            $x = 100;
            $y = "100";
            
            <?php
                $x = 100;
                $y = "10";
                echo "hasil=";
                var_dump($x == $y);

            ?>
        <h3> === (Perbandingan Nilai Dan Tipedata)</h3>
            $x = 100;
            $y = "100";

            <?php
                $x = 100;
                $y ="100";
                echo "hasil=";
                var_dump($x === $y);
            ?>
        
        <h3> Bukan/Tidak Sama Dengan (!= ; <> ; !==) </h3>
            <?php
                $x = 100;
                $y ="100";
                echo "x=".$x;
                echo "<br>";
                echo "y=".$y;
                echo "<br>";
                echo "hasil !=";
                var_dump($x != $y);

                echo "<br>";
                echo "hasil <>";
                var_dump($x <> $y);

                echo "<br>";
                echo "hasil !==";
                var_dump($x !== $y);
            ?>
        <h3> Lebih Dari (>) </h3>
            <?php
                $x = 101;
                $y = "100";
                echo "x".$x;
                echo"<br>";
                echo "y".$y;
                echo "<br>";
                echo "hasil >";
                var_dump($x > $y);
            ?>
        <h3>  Kurang Dari (<) </h3>
            <?php
                $x = 1000;
                $y = 100;
                echo "x=".$x;
                echo "<br>";
                echo "y=".$y;
                echo "<br>"."hasil ";
                var_dump($x < $y);
            ?>
        <h3> Lebih Dari Sama Dengan (>=) </h3>
            <?php
                $x = 1000;
                $y = 100;
                echo "x=".$x;
                echo "<br>";
                echo "y=".$y;
                echo "<br>"."hasil ";
                var_dump($x >= $y);
            ?>
        <h3> Kurang Dari Sama Dengan (<=) </h3>
            <?php
                $x = 1000;
                $y = 100;
                echo "x=".$x;
                echo "<br>";
                echo "y=".$y;
                echo "<br>"."Hasil ";
                var_dump($x <= $y);
            ?>
        <h3>  spaceship (<=>) </h3>
        <!--
            -Jika Kurang Dari Output -1,
            -Jika Sama Dengan Output 0,
            -Jika Lebih Dari Output 1
        -->
        <?php
            $x = 5;
            $y = 10;

            echo "compare ".$x." dengan ".$y." hasil => ".($x <=> $y)."<br>";

            $a = 11;
            $b = 7;
            
            echo "compare ".$a." dengan ".$b." hasil => ".($a <=> $b)."<br>";

            $f = 10;
            $g = 10;

            echo "compare ".$f." dengan ".$g." hasil => ".($f <=> $g);
            ?>
            
    </body>
</html>



