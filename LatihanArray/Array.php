<?php
    // Create Array
    // indexed
    $arr = array("Vynaa","Seiza","Kasumi");
    echo $arr[1],"<br>";

    $arr = [];
    $arr = ["Vynaa","Seiza","Kasumi"];

    // associative
    $mobil = array(
        "Brand" => "BMW",
        "Model" => "GTR",
        "Year" => "2007",
    );
    echo $mobil["Brand"]."<br>";

    $myArr = [];
    $myArr[0] = "Sword";
    $myArr[1] = "Polearm";
    $myArr[2] = "Catalyst";
    
    var_dump($myArr);
    
    // function dalam array 
    function myFunction(){
        echo "Saya Seorang Swordmanship";
    }

    $myArr = array("Motor" => "ZX25R","age" =>25, "message" => "myFunction");

    // var_dump ($myArr);
    echo "<br> hasil function dalam array : ";
    // ketika kita memanggil function dalam array

    echo $myArr["message"]();

    // ketika memanggil value
    // echo $myArr["age"];


    // array associative
    echo "<br> <br><h3>Hasil Foreach Array</h3><br>";
    $mobil = array(
        "brand" => "BMW",
        "model" => "GTR",
        "year" => "2007"
    );

    // value dan key
    foreach($mobil as $x => $y){
        echo "$x : $y <br>";
    }

    // hanya value 
    foreach($mobil as $x){
        echo "$x <br>";
    }

    // update array unset
    $mhs = ["Maple","Sally","Kanade"];
    echo "<br>";

    $mhs[2] = "Paine";
    foreach($mhs as &$x){
        $x = "Oboro";
    }
    unset($X);
    var_dump($mhs);

    echo "<br>";

    $mobil = array(
        "brand" => "BMW",
        "model" => "GTR",
        "year" => "2007"
    );
    $mobil['year'] = "2009";
    var_dump($mobil);


    // add item
    
    $mhs = ['Maple','Sally','Kanade'];
    $mhs[] = "Oboro";
    $mhs[] ="Syrup";

    echo "<br> indeks ke 4 dari array mhs adalah ".$mhs[4];

    // associative
    $mobil = array(
        "brand" => "BMW",
        "model" => "GTR",
        "year" => "2007"
    );
    $mobil["warna"] = "Hitam";
    echo "<br> array dengan key warna berisi : ".$mobil["warna"];

    // multidimension
    $buah = ["Pepaya","Mangga","Pisang","Jambu"];
    array_push($buah, ["Anggur ungu", "Anggur Hijau", "Anggur Merah"], "Apel", "Pir", "Alpukat");

    echo "<br>";
    var_dump ($buah);


?>