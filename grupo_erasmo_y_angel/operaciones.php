<?php
 
if (isset($_POST['envio'])) {
	if ($_POST['dato'] > 0  && $_POST['dato'] <=7) {
 
		echo '<table align="center"><tr><td><b>';
 
		switch ($_POST['dato']) {
			case 1:
				echo kiloLibr($_POST['valor']);
				break;
			case 2:
				echo librKilo($_POST['valor']);
				break;
			case 3:
				echo metroPies($_POST['valor']);
				break;
			case 4:
				echo piesMetro($_POST['valor']);
				break;
			case 5:
				echo fhareCelsius($_POST['valor']);
				break;
			case 6:
				echo celcFharenheit($_POST['valor']);
				break;
			case 7:
				die('Salio del conversor de unidades.');
		}
 
		echo '</b></td></tr></table>';
 
	} else {
		echo 'El valor tiene que ser positivo y menor que 7';
	}
}
 
function kiloLibr($numero) {
	return $numero*2.20462;
}
function librKilo($numero) {
	return $numero*0.453592;
}
function metroPies($numero) {
	return $numero*3.28084;
}
function piesMetro($numero) {
	return $numero*0.3048;
}
function fhareCelsius($numero) {
	return ($numero-32)/1.8;
}
function celcFharenheit ($numero) {
	return ($numero*1.8)+32;
}
?>