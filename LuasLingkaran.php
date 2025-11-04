<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 7;

$rumus = LuasLingkaran::phi * $lingkaran->jari * $lingkaran->jari;
echo 'hasilnya adalah' . $rumus;
?>