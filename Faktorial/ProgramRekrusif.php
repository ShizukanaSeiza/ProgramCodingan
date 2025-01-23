<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program Rekursif</title>
</head>
<body>
    <h1>Aplikasi Contoh Konsep Rekursif</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="program">Pilih Program</label>
                </td>
                <td>
                    : <select name="program" required>
                        <option value="">Pilih</option>
                        <option value="1">Fibonacci</option>
                        <option value="2">Faktorial</option>
                        <option value="3">Penghitung Kata</option>
                        <option value="4">Penghitung Angka</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nilai">Input Value</label>
                </td>
                <td>
                    <input type="text" id="nilai" name="nilai" required>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp <input type="submit" value="Run Program">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

function fibonacci($n) {
  if ($n <= 1) {
    return $n;
  } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

function faktorial($n) {
  if ($n == 0) {
    return 1;
  } else {
    return $n * faktorial($n - 1);
  }
}

function jumlahKarakter($s) {
  if (strlen($s) == 1) {
    return 1;
  } else {
    // echo substr($s, 1)."<br>";
    return 1 + jumlahKarakter(substr($s, 1));
  }
}

function jumlahDigit($n) {
  if ($n < 10) {
    return 1;
  } else {
    return 1 + jumlahDigit($n / 10);
  }
}

if (!empty($_POST)) {
    $program = $_POST['program'];
    $nilai = $_POST['nilai'];
    echo "<br>";
    switch ($program) {
        case "1":
            echo "Fibonacci '$nilai' Adalah : " . fibonacci($nilai);
            break;
        case "2":
            echo "Faktorial '$nilai' Adalah : " . faktorial($nilai);
            break;
        case "3":
            echo "Hitung Kata '$nilai' Adalah : " . jumlahKarakter($nilai);
            break;
        case "4":
            echo "Hitung Angka '$nilai' Adalah : " . jumlahDigit($nilai);
            break;
        default:
            echo "Pilih Program Terlebih Dahulu";
    }
    
}

?>