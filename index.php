<?php
use Pbo\Marketplace\produk;

require('./PropertyConstant.php');

$produk = new produk();
$produk->setKode('P0001')
       ->setNama('LAPTOP')
       ->setHarga('1000000')
       ->setStock(5);

echo "Produk: ". $produk->getNama() . "<br>";
echo "Produk: ". $produk->getHarga() . "<br>";
echo "Produk: ". $produk->getStock() . "<br>";
echo "Produk: ". $produk->pajak() . "%";
echo "<br>";
echo "<br>";
echo "Total harga setelah pajak Rp." . $produk->total();

?>