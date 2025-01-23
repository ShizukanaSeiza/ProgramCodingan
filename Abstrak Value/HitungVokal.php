<?php
// Tanpa Abstrak Method
function hitungVokal($kata) {
    // Daftar Huruf Vokal
    $vokal = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $jumlahVokal = 0;

    // Hitung Jumlah Huruf Vokal Dalam Kata
    for ($i = 0; $i <  strlen($kata); $i++) {
        if (in_array($kata[$i], $vokal)) {
            $jumlahVokal++;
        }
    }

    return $jumlahVokal;
}

// Contoh Penggunaan
$kata = "Shizukana Seiza";
echo "Jumlah huruf vokal dalam '$kata' adalah: " . hitungVokal($kata); // Output: 5
?>

<!-- Fungsi in_array() dalam PHP digunakan untuk memeriksa apakah suatu nilai terdapat dalam sebuah
 array.Ini sangat berguna ketika Anda ingin memeriksa kehadiran elemen tertentu di dalam array tanpa
 harus menulis kode loop manual untuk melakukan pencarian. --> 