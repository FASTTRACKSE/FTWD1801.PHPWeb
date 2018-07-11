<?php 
require "hinhchunhat.php";
require "hinhtron.php";

$ht = new hinhtron();
$ht->bankinh=5;
$ht->hienThi();
echo $ht->dienTich();
$hcn = new hinhchunhat();
$hcn->chieudai=5;
$hcn->chieurong=4;

$hcn->hienThi();
echo $hcn->dienTich();