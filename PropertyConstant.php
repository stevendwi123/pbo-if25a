<?php
namespace Pbo\Marketplace;

trait produk{
    
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stock;

    public const PAJAK = 0.11;

    public function __construct() {
    
    }
    //setter
    public function setkode($kode) {
        $this->kode = $kode;
        return $this;
    }

        public function setnama($nama) {
        $this->nama = $nama;
        return $this;
    }

        public function setharga($harga) {
            if($harga <= 0) {
                echo "harga tidak boleh 0";
                exit();
            }
        $this->harga = $harga;
        return $this;
    }

        public function setstock($stock) {
            if($stock <= 0) {
                echo "harga tidak boleh 0";
                exit();
            }
        $this->stock = $stock;
        return $this;
    }
    
    //getter
    public function getkode(){
        return $this->kode;
    }

    public function getnama(){
        return $this->nama;
    }

    public function getharga(){
        return $this->harga;
    }

    public function getstock(){
        return $this->stock;
    }

    //pajak
    public function pajak() {
         return self::PAJAK * 100;
    }
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}
?>