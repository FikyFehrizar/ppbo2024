<?php

// menghitung luas lingkaran 
function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}
// menghitung keliling lingkaran
function kelilinglingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari ;
    return $keliling ;
}
// menghitung volume bola
function volumebola($jari) : float{
    $volumebola = (4/3)*3.14*$jari*$jari;
    return $volumebola;
}
// menghitung volume tabung
function volumetabung($jari,$tinggi) : float{
    $volumetabung = 3.14 *$jari*$jari*$tinggi;
    return $volumetabung;
}
// menghitung volume kerucut 
function volumekerucut($jari,$tinggi) : float{
    $volumekerucut = (1/3) * 3.14 *$jari*$jari*$tinggi;
    return $volumekerucut;
}

$jari=45;
$tinggi=90;

$luas = luaslingkaran($jari);
$keliling_lingkaran = kelilinglingkaran($jari);
$volume_bola = volumebola($jari) ;
$volume_tabung = volumetabung($jari,$tinggi) ;
$volume_kerucut = volumekerucut($jari,$tinggi);

echo "Luas dari lingkaran adalah : {$luas}\n";
echo "Keliling dari lingkaran adalah : {$keliling_lingkaran}\n";
echo "Volume dari bola  adalah : {$volume_bola}\n";
echo "Volume dari tabung adalah :{$volume_tabung}\n";
echo "Volume dari kerucut adalah :{$volume_kerucut}\n";
