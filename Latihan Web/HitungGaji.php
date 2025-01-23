<?php
echo "<h1>Contoh Hasil Nya</h1>";
// Kelas Pegawai (superclass)
class Pegawai {
    public $nama;
    public $gajiAwal = 4500000; // Gaji awal yang sama untuk semua pegawai

    // Konstruktor untuk menyimpan nama pegawai
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Fungsi untuk menghitung gaji (virtual, akan di-override pada kelas turunan)
    public function hitungGaji() {
        return $this->gajiAwal;
    }
}

// Kelas Dosen (turunan dari Pegawai)
class Dosen extends Pegawai {
    public $sks; // Jumlah SKS yang diampu
    public $gajiSks = 500000; // Tambahan gaji per SKS yang diampu

    // Konstruktor untuk menyimpan nama dan jumlah SKS
    public function __construct($nama, $sks) {
        parent::__construct($nama); // Panggil konstruktor dari Pegawai
        $this->sks = $sks;
    }

    // Override metode hitungGaji untuk menghitung gaji dosen
    public function hitungGaji() {
        return $this->gajiAwal + ($this->sks * $this->gajiSks);
    }
}

// Kelas Staf (turunan dari Pegawai)
class Staf extends Pegawai {
    public $kehadiran; // Jumlah kehadiran staf dalam sebulan
    public $gajiKehadiran = 100000; // Tambahan gaji per kehadiran

    // Konstruktor untuk menyimpan nama dan jumlah kehadiran
    public function __construct($nama, $kehadiran) {
        parent::__construct($nama); // Panggil konstruktor dari Pegawai
        $this->kehadiran = $kehadiran;
    }

    // Override metode hitungGaji untuk menghitung gaji staf
    public function hitungGaji() {
        return $this->gajiAwal + ($this->kehadiran * $this->gajiKehadiran);
    }
}

// Membuat objek pegawai
$pegawai1 = new Dosen("Dr. Andi", 12); // Dosen yang mengampu 12 SKS
$pegawai2 = new Staf("Budi", 22); // Staf yang hadir 22 hari dalam sebulan

// Menampilkan gaji pegawai
echo "Gaji Pegawai: <br><br>";
echo "Nama                = " . $pegawai1->nama . "<br>";
echo "Golongan            = Dosen<br>";
echo "Gaji                = Rp. " . number_format($pegawai1->hitungGaji(), 0, ',', '.') . "<br><br>";

echo "Nama                = " . $pegawai2->nama . "<br>";
echo "Golongan            = Staf<br>";
echo "Gaji                = Rp. " . number_format($pegawai2->hitungGaji(), 0, ',', '.') . "<br>";

?>
