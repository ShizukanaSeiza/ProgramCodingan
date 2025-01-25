<?php
// Definisikan kelas untuk menyimpan data nama,nominal, dan sandi
class DataMaster {
    private $nama;
    private $nominal;
    private $noRekening;

    public function __construct($nama,$nominal,$noRekening) {
        $this->nama = $nama;
        $this->nominal = $nominal;
        $this->noRekening = $noRekening;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNominal() {
        return $this->nominal;
    }
    
    public function getnoRekening() {
        return $this->noRekening;
    }
}

// Definisikan kelas untuk mengelola koleksi data nominal
class KoleksiNominal {
    private $data = [];

    public function tambahDataMaster($DataMaster) {
        $this->data[] = $DataMaster;
    }

    public function cariPengguna($nama, $noRekening) {
        foreach ($this->data as $DataMaster) {
            if ($DataMaster->getNama() === $nama && $DataMaster->getnoRekening() == $noRekening) {
                return "Irasshaimase " . $nama . " Heisha ATM nite";
            }
        }
        return "Namae ya kōza bangō ga machigatte iru";
    }
}

// Membuat instansiasi objek dari kelas KoleksiNominal
$koleksi = new KoleksiNominal();

// Menambahkan data ke dalam koleksi
$koleksi->tambahDataMaster(new DataMaster('Seiza',100000,'123456'));
$koleksi->tambahDataMaster(new DataMaster('Vynaa',150000,'567899'));
$koleksi->tambahDataMaster(new DataMaster('Mizuno',200000,'910101'));
$koleksi->tambahDataMaster(new DataMaster('Osaragi',250000,'112121'));
$koleksi->tambahDataMaster(new DataMaster('Raeliana',300000,'314141'));
$koleksi->tambahDataMaster(new DataMaster('Raviel',350000,'516161'));
$koleksi->tambahDataMaster(new DataMaster('Ivasia',400000,'718181'));
$koleksi->tambahDataMaster(new DataMaster('Ayame',450000,'920101'));
$koleksi->tambahDataMaster(new DataMaster('Elianna',500000,'122323'));
$koleksi->tambahDataMaster(new DataMaster('Sung Jin Wo',550000,'324343'));

// Mencari pengguna berdasarkan nama dan noRekening
$namaDicari = $_POST['nama'];
$noRekeningDicari = $_POST['noRekening'];
$hasilPencarian = $koleksi->cariPengguna($namaDicari, $noRekeningDicari);

echo $hasilPencarian;
?>