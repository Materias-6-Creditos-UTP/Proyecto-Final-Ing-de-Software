<table align="center">
	<tr><td>1.- Convertir kilogramos a Libras</td></tr>
	<tr><td>2.- Convertir Libras a kilogramos</td></tr>
	<tr><td>3.- Convertir de metros a pies</td></tr>
	<tr><td>4.- Convertir de pies a metros</td></tr>
	<tr><td>5.- Convertir de Fahrenheit a Celcius</td></tr>
	<tr><td>6.- Convertir de Celcius a Fahrenheit</td></tr>
	<tr><td>7.- Salir</td></tr>
	<?php
		if ($_POST['dato'] != 7) {
	?>
	<tr><form method="post" action=""><td>Escriba una opcion: <input type="text" name="dato" <?php if(isset($_POST['envio']) && $_POST['dato'] < 7) {echo "value = '".$_POST['dato']."'";}?> ></td></tr>
	<tr><td>Escribe la cantidad a convertir: <input type="text" name="valor" <?php if(isset($_POST['envio'])) {echo "value = '".$_POST['valor']."'";}?> ></td><td><input type="submit" name="envio" value="convertir"></td></form></tr>
 
	<?php
		}
	?>
</table>
 
<?php
 
include 'operaciones.php';
 
?>