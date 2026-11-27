<?php

require('./Jasa.php');

use Pbo\Marketplace\Jasa;


$produk = new Jasa('P0001', 'Laptop', 10000000, 5);


$produk->setKode('P0001');
$produk->setNama('Laptop');
$produk->setHarga(10000000);
$produk->setStok(5);


echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: Rp." . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/><br/>";

echo "Total Harga Setelah Pajak: Rp." . $produk->total();
echo "<br/>";

// Mengubah harga menggunakan setter
$produk->setHarga(9000000);

echo "Harga Baru: Rp." . $produk->getHarga();
echo "<br/>";


echo "Metode Pembayaran: " . $produk->payment('qris');

?>