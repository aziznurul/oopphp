<?php
/* define('NAMA', 'Aziz Nurul Hidayat');
echo NAMA;

echo "<br>";

const UMUR = 28;
echo UMUR; */

/* class Coba
{
  const NAMA = 'Aziz Nurul Hidayat';
}
echo Coba::NAMA; */

/* 
function Coba()
{
  return __FUNCTION__;
}

echo coba(); */

class a
{
  public $kelas = __CLASS__;
}
$obj = new a;
echo $obj->kelas;
