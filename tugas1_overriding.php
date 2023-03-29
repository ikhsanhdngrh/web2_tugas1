<?php
class Fasilkom_E
{
  public $nilai;
  public function __construct($nilai)
  {
    $this->nilai = $nilai;
  }
  public function intro()
  {
    echo "Nilai = {$this->nilai}.";
  }
}

class nilai_ujian extends Fasilkom_E
{
  public $predikat;
  public function __construct($nilai, $predikat)
  {
    $this->nilai = $nilai;
    $this->predikat = $predikat;
  }
  public function intro()
  {
    echo "Nilai ujian = {$this->nilai}, predikat {$this->predikat}.";
  }
}

$nilai_ujian = new nilai_ujian( 100, "jenius");
$nilai_ujian->intro();
?>