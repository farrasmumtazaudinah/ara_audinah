<?php
// Import semua class yang diperlukan
require_once 'User.php';
require_once 'Product.php';
require_once 'Order.php';

// Inisialisasi objek
$user = new User("Widianto");
$product = new Product("Laptop", 100000);
$order = new Order($user, $product, 2);

// Fungsi untuk format Rupiah
function formatRupiah($angka) {
    return number_format($angka, 2, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order</title>
</head>
<body>
    <p>Nama User: <?php echo $user->getNama(); ?></p>
    <p>Produk: <?php echo $product->getNamaProduk(); ?></p>
    <p>Harga Satuan: <?php echo formatRupiah($product->getHargaSatuan()); ?></p>
    <p>Jumlah: <?php echo $order->jumlah; ?></p>
    <p>Total Harga: <?php echo formatRupiah($order->getTotalHarga()); ?></p>
</body>
</html>
