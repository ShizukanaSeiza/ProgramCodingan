<!DOCTYPE html>
<html>
<head>
    <title>ATM Bank Emok</title>
</head>
<body>

    <?php
// Definisikan kelas untuk menyimpan data nama, nominal, dan noRekening
class DataMaster {
    private $nama;
    private $nominal;
    private $noRekening;

    public function __construct($nama, $nominal, $noRekening) {
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
            if ($DataMaster->getNama() === $nama && $DataMaster->getNoRekening() === $noRekening) {
                return $DataMaster;
            }
        }
        return null;
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

// Mendapatkan input dari form
if (!empty($_POST['nama']) && !empty($_POST['noRekening'])) {
    $namaDicari = $_POST['nama'];
    $noRekeningDicari = $_POST['noRekening'];
    $pengguna = $koleksi->cariPengguna($namaDicari, $noRekeningDicari);

    if ($pengguna !== null) {
        echo "<h3>Selamat datang, " . $pengguna->getNama() . " di mesin ATM kami!</h3>";
        ?>
        <form method="post">
            <label for="menu">Pilih menu:</label>
            <select name="menu" id="menu">
                <option value="cek_nominal">Cek Nominal</option>
            </select>
            <input type="hidden" name="nama" value="<?php echo $pengguna->getNama(); ?>">
            <input type="hidden" name="noRekening" value="<?php echo $pengguna->getNoRekening(); ?>">
            <input type="submit" value="Submit">
        </form>
        <?php
        if (isset($_POST['menu']) && $_POST['menu'] === 'cek_nominal') {
            echo "<h3>Nominal anda: Rp. " . $pengguna->getNominal() . "</h3>";
        } 
    }else {
            echo "<h3>Nama atau Nomor Rekening salah, <a href='loginTampilNominal.php'><button>Login Lagi</button></a></h3>";
    }
} else {
    ?>
    <h2>Form Login</h2>
    <form method="post">
        <label for="nama">Nama: </label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="noRekening">Nomor Rekening:</label><br>
        <input type="password" id="noRekening" name="noRekening"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
}

?>
</body>
</html>