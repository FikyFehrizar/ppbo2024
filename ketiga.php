<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }


    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }


    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari; 
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }


    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari,2) * $this->tinggi;
    }
}
$lingkaran = new Lingkaran(4);
$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();
echo "luas lingkaran : {$luas_lingkaran}\n";
echo "keliling lingkaran : {$keliling_lingkaran}\n";


$bola = new Bola(4);
$volume_bola=$bola->volume();
echo "volume bola : {$volume_bola}\n";

$tabung = new Tabung(4,10);
$volume_tabung=$tabung->volume();
echo "volume tabung : {$volume_tabung}\n";

$nasi_tumpeng = new Kerucut(4,10); 
$volume_nasi_tumpeng =$nasi_tumpeng -> volume();
echo "volume kerucut : {$volume_nasi_tumpeng}";


