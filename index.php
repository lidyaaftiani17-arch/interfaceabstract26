<?php
require_once 'TransferBank.php';
require_once 'Ewallet.php';
require_once 'QRIS.php';
require_once 'COD.php';
require_once 'VirtualAccount.php';

// objek
$transfer = new TransferBank(100000);
$ewallet = new Ewallet(50000);
$qris = new QRIS(75000);
$cod = new COD(60000);
$va = new VirtualAccount(80000);

// output
echo $transfer->prosesPembayaran();
echo "<br>";
echo $transfer->cetakStruk();
echo "<br>Total: " . $transfer->totalBayar();

echo "<hr>";

echo $ewallet->prosesPembayaran();
echo "<br>";
echo $ewallet->cetakStruk();
echo "<br>Total: " . $ewallet->totalBayar();

echo "<hr>";

echo $qris->prosesPembayaran();
echo "<br>";
echo $qris->cetakStruk();
echo "<br>Total: " . $qris->totalBayar();

echo "<hr>";

echo $cod->prosesPembayaran();
echo "<br>";
echo $cod->cetakStruk();
echo "<br>Total: " . $cod->totalBayar();

echo "<hr>";

echo $va->prosesPembayaran();
echo "<br>";
echo $va->cetakStruk();
echo "<br>Total: " . $va->totalBayar();
?>