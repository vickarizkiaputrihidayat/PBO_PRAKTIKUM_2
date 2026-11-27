<?php

require('./jasa.php');

use Pbo\Marketplace\jasa;

//object
$produk = new jasa('P0001', 'Laptop', 10000000, 5);

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