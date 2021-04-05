<?php
function verificar_url($url)
{
   //abrimos el archivo en lectura
   $id = @fopen($url,"r");
   //hacemos las comprobaciones
   if ($id) $abierto = true;
   else $abierto = false;
   //devolvemos el valor
   return $abierto;
   //cerramos el archivo
   fclose($id);
}
?>
<html>
<head>
   <title>Verificacion de URL</title>
</head>
<body>
<?
if (!isset($url))
{
?>
   <form action="enlace.php" method="post">
   Indica tu URL:<br>
   <input type="Text" size="25" maxlength="100" name="url" value="http://">
   <input type="Submit" value="Verificar!">
   </form>
<?
}
else
{
   $abierto = verificar_url($url);
   if ($abierto) echo "La URL existe!";
   else echo "La URL no existe o es inaccesible...";
}
?>
</body>
</html>
