<?php
class Buku {
    public $judul;
    public $anak;

    public function __construct($judul) {
        $this->judul = $judul;
        $this->anak = [];
    }

    public function tambahAnak($buku) {
        $this->anak[] = $buku;
    }

    public function cariBuku($judul, $daftarBuku) {
        if ($this->judul == $judul) {
            return $this;
        } else {
            foreach ($this->anak as $anak) {
                $hasil = $anak->cariBuku($judul, $daftarBuku);
                if ($hasil) {
                    return $hasil;
                }
            }
            return null;
        }
    }
}

$buku = new Buku("Buku Adventure");
$buku->tambahAnak(new Buku("Buku Fantasy"));
$buku->anak[0]->tambahAnak(new Buku("Buku Romance"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $judul_buku = $_POST['judul'];

    $buku_ditemukan = $buku->cariBuku($judul_buku, $buku);

    if ($buku_ditemukan) {
        echo "Buku '$judul_buku' telah dipinjam oleh $nama.";
    } else {
        echo "Buku tidak ditemukan.";
    }
}

    echo '<form action="PeminjamanBuku.php" method="POST">
    <button>Kembali</button>
    </form>';
?>

 