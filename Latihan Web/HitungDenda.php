<?php
echo "<h1>Contoh Hasil Nya</h1>";
// Fungsi untuk menghitung denda
function hitungDenda($tanggalPinjam, $tanggalKembali) {
    // Menghitung selisih hari antara tanggal pinjam dan tanggal kembali
    $tanggalPinjam = strtotime($tanggalPinjam); // Mengubah tanggal pinjam menjadi timestamp
    $tanggalKembali = strtotime($tanggalKembali); // Mengubah tanggal kembali menjadi timestamp

    // Menghitung jumlah hari antara kedua tanggal
    $selisihHari = ($tanggalKembali - $tanggalPinjam) / (60 * 60 * 24);

    // Jika lebih dari 10 hari, maka dihitung denda keterlambatan
    if ($selisihHari = 11) {
        // Lama peminjaman dihitung dari tanggal pinjam sampai tanggal kembali
        $lamaPeminjaman = $selisihHari;
        // Hitung keterlambatan
        $telat = $selisihHari - 10;
        // Denda per hari keterlambatan
        $dendaPerHari = 250000;
        // Total denda
        $denda = $telat * $dendaPerHari;

        return array($lamaPeminjaman, $telat, $denda);
    } else {
        // Tidak ada denda jika peminjaman kurang dari atau sama dengan 10 hari
        return array($selisihHari, 0, 0);
    }
}

// Data input
$nama = "Nazriel"."<br>";
$idMember = "11061100xx"."<br>";
$tanggalPinjam = "01-01-2019"."<br>";
$tanggalKembali = "11-01-2019"."<br>";

// Menghitung denda
list($lamaPeminjaman, $telat, $denda) = hitungDenda($tanggalPinjam, $tanggalKembali);

// Output hasil
echo "Nama                = $nama\n";
echo "ID Member           = $idMember\n";
echo "Tanggal Pinjam      = $tanggalPinjam\n";
echo "Tanggal Kembali     = $tanggalKembali\n";
echo "Lama Peminjaman     = $lamaPeminjaman hari\n"."<br>";
echo "Telat               = $telat hari\n"."<br>";
echo "Denda               = Rp. " . number_format($denda, 0, ',', '.') . "\n";
?>

