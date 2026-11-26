<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001', 'Laptop', 10000000, 5);

//hasil
echo "Produk: " . $produk->getNama();
echo "<br/>";
echo "Harga: Rp." . $produk->getHarga();
echo "<br/>";
echo "Stok: " . $produk->getStok();
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";
echo "Total Harga Setelah Pajak: Rp" . $produk->total();

//mengubah harga menggunakan setter
$produk->setHarga(9000000);

echo "<br/>";
echo "Harga Baru: Rp." . $produk->getHarga();