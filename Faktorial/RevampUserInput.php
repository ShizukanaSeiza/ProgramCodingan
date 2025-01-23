<?php
// Fungsi untuk menghitung faktorial
function faktorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

// Fungsi untuk menghitung angka Fibonacci
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Fungsi untuk menghitung jumlah angka dalam input
function jumlahAngka($input) {
    $sum = 0;
    $numbers = explode(' ', $input);
    foreach ($numbers as $num) {
        if (is_numeric($num)) {
            $sum += $num;
        }
    }
    return $sum;
}

// Fungsi untuk menghitung jumlah kata dalam input
function jumlahKata($input) {
    $words = str_word_count($input, 0);
    return $words;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $operation = $_POST['operation'];
    $input = $_POST['input'];

    $result = "";

    // Pilihan operasi
    if ($operation == 'faktorial') {
        // Memastikan input adalah angka dan >= 0
        if (is_numeric($input) && $input >= 0) {
            $result = faktorial($input);
        } else {
            $result = "Masukkan angka yang valid dan lebih besar atau sama dengan 0.";
        }
    } elseif ($operation == 'fibonacci') {
        // Memastikan input adalah angka dan >= 0
        if (is_numeric($input) && $input >= 0) {
            $result = fibonacci($input);
        } else {
            $result = "Masukkan angka yang valid dan lebih besar atau sama dengan 0.";
        }
    } elseif ($operation == 'jumlahAngka') {
        // Menghitung jumlah angka dalam input
        $result = jumlahAngka($input);
    } elseif ($operation == 'jumlahKata') {
        // Menghitung jumlah kata dalam input
        $result = jumlahKata($input);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Rekrusif</title>
</head>
<body>
    <h1>Aplikasi Contoh Konsep Rekrusif </h1>
    <h2>Metode Penghitungan</h2>

    <!-- Form input untuk menentukan pilihan metode operasi -->
    <form method="post">
        <label for="operation">Pilih Program:</label>
        <select name="operation" id="operation" required>
            <option value="faktorial">Faktorial</option>
            <option value="fibonacci">Fibonacci</option>
            <option value="jumlahAngka">Jumlah Angka</option>
            <option value="jumlahKata">Jumlah Kata</option>
        </select><br><br>

        <label for="input">Input Value:</label>
        <input type="text" id="input" name="input" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Menampilkan hasil jika sudah dihitung
    if (isset($result)) {
        echo "<h3>Hasil: $result</h3>";
    }
    ?>
</body>
</html>
