<?php

namespace Pbo\Marketplace;
trait Produk {

    //property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    //getter
    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getStok() {
        return $this->stok;
    }

    //setter
    public function setKode($kode) {
        $this->kode = $kode;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setStok($stok) {
        $this->stok = $stok;
    }

    public function pajak() {
        return self::PAJAK * 100; //11%
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}