<?php 
class Cms5ec3046deb1ac512952441_1d003f717b3d0e6420b313054d041587Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['anios'] = $this->getYears();
}
public function getYears()
{

	$fecha1 = explode("-","1964-04-15"); // fecha nacimiento
	$fecha2 = explode("-",date("Y-m-d")); // fecha actual

	$Edad = $fecha2[0]-$fecha1[0];
	if($fecha2[1] < $fecha1[1])
	  $Edad = $Edad - 1;
	else if($fecha2[1] == $fecha1[1] and $fecha2[2] < $fecha1[2])
	  $Edad = $Edad - 1;
	return $Edad;

}
}
