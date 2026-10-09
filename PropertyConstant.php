<?php
class produk{
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;

    public const PAJAK = 0.11;
}

$produk = new produk();
$produk -> kode = "sopwan";
$produk -> nama = "pc";
$produk -> harga = 1000000;
$produk -> stock = 5;

$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK;

$total = $produk->harga + $jumlahpajak;

echo "produk: ". $produk->nama;
echo "</br>";

echo "harga: ". $produk->harga;
echo "</br>";

echo "stock: ". $produk->stock;
echo "</br>";

echo "pajak: ". $pajak;
echo "</br>";
echo "</br>";
echo "Total harga setelah pajak: Rp.". $total;