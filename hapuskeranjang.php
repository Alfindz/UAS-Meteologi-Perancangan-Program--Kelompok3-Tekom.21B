<?php
session_start();
// hapus keranjang
$id_produk = $_GET['id'];
unset($_SESSION['keranjang'][$id_produk]);

echo "<script>alert('produk dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";