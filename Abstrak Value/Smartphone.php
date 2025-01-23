<?php
class Smartphone {
    // Virtual Privat
    private $menyala = false;

    // Metode Publik
    public function tombolMenyalakan() {
        $this->menyala = true;
    }

    public function tombolMatikan() {
        $this->menyala = false;
    }

    public function cetakStatus() {
        echo ($this->menyala ? "Smartphone telah menyala" : "Smartphone mati") . "\n";
    }
}

// Membuat Objek Smartphone
$bcpp = new Smartphone();

// Mengakses Metode
$bcpp->cetakStatus();
echo "<br>";
$bcpp->tombolMenyalakan();
$bcpp->cetakStatus();
echo "<br>";
$bcpp->tombolMatikan();
$bcpp->cetakStatus();
?>