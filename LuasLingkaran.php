<?php

namespace App\Math; //Pasang namespace
class LuasLingkaran {
    public const phi = 3.14;
    private int $jari;  // variable private

    //constructor
    public function __construct($Isijari = 1) {
        $this->jari = $Isijari;
    }
 
    //mengubah nilai jari, karena sebelumnya di private (setter)
    public function SetJari($nilai){
        $this->jari = $nilai;
        return $this->jari;

    }
    //Method biasa (non-static)
    public function tampil($nama = 'ban'){
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran $nama hasilnya adalah:" . $rumus ."<br>";
    
    }
    public function __destruct(){
        echo "<br>";
        echo "udah ah cape";
    }    
    //Method static (bisa dipanggil tanpa objek)
    public static function testing(){
        echo "<br>";
        echo "ini dari static";
        ;
    }

}    

//Pemanggilan 
$lingkaran = new LuasLingkaran(7);
$lingkaran->setJari(7);//menjadi setJari karena variable jari di private
$lingkaran->tampil('kue');
LuasLingkaran::testing();
?>