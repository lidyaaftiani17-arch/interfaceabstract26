<?php
# Penggunaan Abstract Class
abstract class Pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    // method wajib
    abstract public function prosesPembayaran();

    // method umum
    public function validasi() {
        return $this->jumlah > 0;
    }

    // diskon 10%
    public function diskon() {
        return $this->jumlah * 0.10;
    }

    // pajak 11%
    public function pajak() {
        return $this->jumlah * 0.11;
    }

    // total akhir
    public function totalBayar() {
        $total = $this->jumlah - $this->diskon();
        return $total + $this->pajak();
    }
}
?>