<?php
    $nilai = 0;
    if($nilai >= 90 && $nilai <= 100){
        echo "A";
    }elseif($nilai >= 85 && $nilai <= 90){
        echo "B";
    }elseif($nilai >= 75 && $nilai <=84){
        echo "C";
    }elseif($nilai >= 40 && $nilai <=74){
        echo "D";
    }elseif($nilai >= 100){
        echo "Maaf Input Data Anda Salah";
    }elseif($nilai < 0 ){
        echo "Maaf Input Data Anda Salah";
    }else{
        echo "E";
    }

?>
