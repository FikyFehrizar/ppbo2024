<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
//echo "Halo {$nama} sekarang pukul {$waktu}\n";
if ($waktu>=19) {
    echo "Selamat malam {$nama} sekarang pukul {$waktu}";
}
elseif ($waktu>=15){
    echo "Selamat sore {$nama} sekarang pukul {$waktu}";
}
elseif ($waktu>=11){
    echo "Selamat siang {$nama} sekarang pukul {$waktu}";
}
elseif ($waktu>=5){
    echo"Selamat pagi {$nama} sekarang pukul{$waktu}";
}