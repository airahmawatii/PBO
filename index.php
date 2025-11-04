<?php

require_once('./LuasLingkaran.php'); //panggil file LuasLingkaran.php

use App\Math\LuasLingkaran; //panggil namespace


$lingkaran = new LuasLingkaran(10);
$lingkaran->tampil('roda'); //panggil method
LuasLingkaran::testing();

?>