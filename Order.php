<?php
class Order {
    public $user;
    public $product;
    public $jumlah;

    public function __construct($user, $product, $jumlah) {
        $this->user = $user;
        $this->product = $product;
        $this->jumlah = $jumlah;
    }

    public function getTotalHarga() {
        return $this->product->getHargaSatuan() * $this->jumlah;
    }
}
?>
