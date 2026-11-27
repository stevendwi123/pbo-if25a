<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\produk;

class Jasa {

    use produk;

    public function payment($tipe) {
        
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "Qris",
            default => "hanya Bisa Pakai VA & Qris",
        };

    }
}