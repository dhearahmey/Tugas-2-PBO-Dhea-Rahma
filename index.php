<?php

class BangunDatar {
    public $phi;

    public function __construct() {
        $this->phi = 3.14;
    }

    // Persegi
    public function persegi($sisi) {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "=== PERSEGI === <br>";
        echo "Sisi: " . $sisi . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // Persegi Panjang
    public function persegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "=== PERSEGI PANJANG === <br>";
        echo "Panjang: " . $panjang . "<br>";
        echo "Lebar: " . $lebar . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // Segitiga
    public function segitiga($alas, $tinggi, $sisi1, $sisi2) {
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $sisi1 + $sisi2;

        echo "=== SEGITIGA === <br>";
        echo "Alas: " . $alas . "<br>";
        echo "Tinggi: " . $tinggi . "<br>";
        echo "Sisi 1: " . $sisi1 . "<br>";
        echo "Sisi 2: " . $sisi2 . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // Lingkaran
    public function lingkaran($jariJari) {
        $luas = $this->phi * $jariJari * $jariJari;
        $keliling = 2 * $this->phi * $jariJari;

        echo "=== LINGKARAN === <br>";
        echo "Jari-jari: " . $jariJari . "<br>";
        echo "Phi: " . $this->phi . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // Trapesium
    public function trapesium($sisiAtas, $sisiBawah, $tinggi, $sisiMiring1, $sisiMiring2) {
        $luas = 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
        $keliling = $sisiAtas + $sisiBawah + $sisiMiring1 + $sisiMiring2;

        echo "=== TRAPESIUM === <br>";
        echo "Sisi Atas: " . $sisiAtas . "<br>";
        echo "Sisi Bawah: " . $sisiBawah . "<br>";
        echo "Tinggi: " . $tinggi . "<br>";
        echo "Sisi Miring 1: " . $sisiMiring1 . "<br>";
        echo "Sisi Miring 2: " . $sisiMiring2 . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }
}

// Membuat objek
$bangun = new BangunDatar();

// Memanggil method
$bangun->persegi(5);
$bangun->persegiPanjang(10, 5);
$bangun->segitiga(6, 4, 5, 5);
$bangun->lingkaran(7);
$bangun->trapesium(6, 10, 4, 5, 5);

?>