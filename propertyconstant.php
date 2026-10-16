<?php

class produk {
    //property
   public string $kode;
   public string $nama;
   public int $harga;
   public int $stok;

   //constant
   public const PAJAK  = 0.11;
    
   }


//object

$produk = new produk() ;
$produk-> kode = 'P0001' ;
$produk-> nama = 'laptop' ;
$produk-> harga = '10000000' ;
$produk-> stok = '5' ;

//hitung pajak
$pajak= Produk::PAJAK*100;//11%
$jumlahPajak=$produk->harga* Produk::PAJAK;//1,1juta

//total
$total=$produk->harga+$jumlahPajak;




//hasil
echo "produk: ". $produk->nama;
echo "<br/>";
echo "harga: Rp. ". $produk->harga;
echo "<br/>";
echo "stok: ". $produk->stok;
echo "<br/>";
echo "pajak:" . $pajak. "%";
echo "<br/>";
echo "Total Harga Setelah Pajak: Rp". $total;



