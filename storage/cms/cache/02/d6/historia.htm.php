<?php 
class Cms5ebef2762a101996511826_5851fd8bcc0e148a128d395fbfaf72d9Class extends Cms\Classes\PageCode
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
