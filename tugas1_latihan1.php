<?php
class kendaraan
{
  // Properties
  public $merek;
  public $jml_roda;
  public $harga;
  public $warna;
  public $bhn_bakar;

  // Methods
  function set_merek($merek)
  {
    $this->merek = $merek;
  }
  function get_merek()
  {
    return $this->merek;
  }
  function set_jml_roda($jml_roda)
  {
    $this->jml_roda = $jml_roda;
  }
  function get_jml_roda()
  {
    return $this->jml_roda;
  }
  function set_harga($harga)
  {
    $this->harga = $harga;
  }
  function get_harga()
  {
    return $this->harga;
  }
  function set_warna($warna)
  {
    $this->warna = $warna;
  }
  function get_warna()
  {
    return $this->warna;
  }
  function set_bhn_bakar($bhn_bakar)
  {
    $this->bhn_bakar = $bhn_bakar;
  }
  function get_bhn_bakar()
  {
    return $this->bhn_bakar;
  }
}

$kendaraan2 = new kendaraan();
$kendaraan2->set_merek('Toyota yaris');
$kendaraan2->set_jml_roda('4');
$kendaraan2->set_harga('160.000.000');
$kendaraan2->set_warna('merah');
$kendaraan2->set_bhn_bakar('premium');
echo "Nama: " . $kendaraan2->get_merek();
echo "<br>";
echo "Jumlah roda: " . $kendaraan2->get_jml_roda();
echo "<br>";
echo "Harga: " . $kendaraan2->get_harga();
echo "<br>";
echo "Warna: " . $kendaraan2->get_warna();
echo "<br>";
echo "Bahan bakar: " . $kendaraan2->get_bhn_bakar();
echo "<br>";

$kendaraan3 = new kendaraan();
$kendaraan3->set_merek('Honda Scoopy');
$kendaraan3->set_jml_roda('2');
$kendaraan3->set_harga('13.000.000');
$kendaraan3->set_warna('putih');
$kendaraan3->set_bhn_bakar('premium');
echo "================================";
echo "<br>";
echo "Nama: " . $kendaraan3->get_merek();
echo "<br>";
echo "Jumlah roda: " . $kendaraan3->get_jml_roda();
echo "<br>";
echo "Harga: " . $kendaraan3->get_harga();
echo "<br>";
echo "Warna: " . $kendaraan3->get_warna();
echo "<br>";
echo "Bahan bakar: " . $kendaraan3->get_bhn_bakar();
echo "<br>";

$kendaraan4 = new kendaraan();
$kendaraan4->set_merek('Isuzu panther');
$kendaraan4->set_jml_roda('4');
$kendaraan4->set_harga('170.000.000');
$kendaraan4->set_warna('hitam');
$kendaraan4->set_bhn_bakar('Solar');
echo "================================";
echo "<br>";
echo "Name: " . $kendaraan4->get_merek();
echo "<br>";
echo "Jumlah roda: " . $kendaraan4->get_jml_roda();
echo "<br>";
echo "Harga: " . $kendaraan4->get_harga();
echo "<br>";
echo "Warna: " . $kendaraan4->get_warna();
echo "<br>";
echo "Bahan bakar: " . $kendaraan4->get_bhn_bakar();
?>