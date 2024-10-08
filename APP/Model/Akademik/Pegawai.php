<?php
namespace App\Model\Akademik;

use App\Model\Akademik;

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function cekIn() : bool {
        return true;
    }

    public function cekOut() : bool {
        return true;
    }

    protected function getNoHp() : int {
        return $this->no_hp;
    }

    public function setNoHp(int $newNoHp) : void {
        $this->no_hp = $newNoHp;
    }
    
}
?>