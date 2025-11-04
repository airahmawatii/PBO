<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;
    public function __construct($Isijari = 1){
        $this->jari = $Isijari;
    }
    public function __destruct(){
        echo "<br>";
        echo "udah ah cape";
    }
    //Method biasa (non-static)
    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran $nama hasilnya adalah:" . $rumus ."<br>";
    
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
$lingkaran->jari = 7;
LuasLingkaran::testing();
?>