<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new produk('P0001','Laptop',10000000,5);



//hasil 
echo "Produk: ". $produk->nama;
echo "<br/>";
echo "Harga: Rp.". $produk->harga;
echo "<br/>";
echo "Stok: ". $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak(). "%";
echo "<br/>";
echo "<br/>";
echo "Total Harga Setelah Pajak: Rp". $produk->total();