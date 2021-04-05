<?php 
//Azure
function db_connection() {
    try {
        $link = mysqli_connect("ingsoftware.mysql.database.azure.com", "ingsoftware@ingsoftware", "Q!1234567", "utp"); //Conexion a la base de datos
        $link -> set_charset("utf8");
    } catch (\Throwable $th) {
      $link = false;
    }


  //   $link = mysqli_init();
  //   mysqli_ssl_set($link,NULL,NULL, "/var/www/html/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
  //   mysqli_real_connect($link, 'ingsoftware.mysql.database.azure.com', 'ingsoftware@ingsoftware', 'Q!1234567', 'utp', 3306, MYSQLI_CLIENT_SSL);



  // if (mysqli_connect_errno($link)) {
  // die('Failed to connect to MySQL: '.mysqli_connect_error());
  // }

    return $link;
}









// pruebaa



 ?>