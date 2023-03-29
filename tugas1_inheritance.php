<?php

class Mobil
{
  public $toyota = true;
}
class gerobak extends Mobil
{
  public $gerobak = true;
}

$kendaraan1 = new gerobak();
$kendaraan2 = new Mobil();

if (property_exists($kendaraan1, "gerobak")) {
  echo "Saya mempunyai kendaraan beroda 4 tapi berjenis gerobak!";
}

?>