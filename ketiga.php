<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
    }


    public function keliling($jari_jari) : float {
        return 2*self::PHI*$jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari; 
    public $tinggi;

    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume($jari_jari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;
    }
}
$lingkaran= new Lingkaran();
$lingkaran->$jari_jari(4);
$lingkaran=new lingkaran(4);
$luas_lingkaran=$lingkaran-> luas($jari_jari);
$keliling_lingkaran=$lingkaran->keliling($jari_jari);
echo "luas lingkaran : {$luas_lingkaran}\n";
echo "keliling lingkaran : {$keliling_lingkaran}\n";


$bola = new Bola();
$bola->$jari_jari=4;
$bola = new Bola(4);
$volume_bola=$bola->volume($jari_jari);
echo "volume bola : {$volume_bola}/n";

$tabung = new Tabung();
$tabung -> $jari_jari = (4);
$tabung -> $tinggi =(10);
$tabung = new Tabung (4,10);
$volume_tabung=$tabung->volume($jari_jari,$tinggi);
echo " volume tabung : {$volume_tabung}\n";

$nasi_tumpeng = new kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi= 10; 
$nasi_tumpeng = new kerucut(4,10);
$volume_nasi_tumpeng =$nasi_tumpeng -> volume($jari_jari,$tinggi);
echo "volume kerucut : {$volume_nasi_tumpeng}";


