<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    //Method biasa (non-static)
    public function tampil($nama = 'ban') {
        $rumus = self::phi * $this->jari * $this->jari;
        echo "Lingkaran $nama hasilnya adalah:" . $rumus ."<br>";
    
    }

    //Method static (bisa dipanggil tanpa objek)
    public static function testing($jari){
        $hasil = self::phi * $jari * $jari;
        echo "ini hasil dari static :" . $hasil;
    }
}    

//Pemanggilan method biasa
$lingkaran = new LuasLingkaran();
$lingkaran->jari = 7;
$lingkaran->tampil('kue');

//pemanggilan method static
LuasLingkaran::testing(10);
?>