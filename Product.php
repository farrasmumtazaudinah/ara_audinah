<?php
class Product {
    public $namaProduk;
    public $hargaSatuan;

    public function __construct($namaProduk, $hargaSatuan) {
        $this->namaProduk = $namaProduk;
        $this->hargaSatuan = $hargaSatuan;
    }

    public function getNamaProduk() {
        return $this->namaProduk;
    }

    public function getHargaSatuan() {
        return $this->hargaSatuan;
    }
}
?>
