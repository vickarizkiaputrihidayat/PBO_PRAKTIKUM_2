<?php

namespace Pbo\Marketplace;

require_once ('propertyconstant.php');

use pbo\marketplace\produk;

class jasa {
    use produk;

    public function payment($tipe) {
        return match($tipe) {
            "virtual" => 'virtual Account',
            "qris" => 'qris',
            default => 'hanya bisa pembayaran va dan qris'
        };
        }

    }
