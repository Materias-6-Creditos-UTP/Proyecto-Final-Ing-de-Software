<?php
function getusers() {
    require_once __DIR__ . '/../../config/db_con.php';

    $link = db_connection();

    $sql = "SELECT * FROM usuarios";
  
    if($result = mysqli_query($link,$sql))
    {
  
      if(mysqli_num_rows($result) > 0)
      {
        $contador = 0;
        while($row = mysqli_fetch_array($result))
          {
            $ID = $row["ID"];
            $Nombre = $row["Nombres"];
            $Apellido = $row["Apellidos"];
            $cedula = $row["cedula"];
            $Edad = $row["Edad"];
            $Sexo = $row["Sexo"];
            $Fecha_de_Nacimiento = $row["Fecha_de_Nacimiento"];
            $Tipo_de_Sangre = $row["Tipo_de_Sangre"];
            $Direccion_Residencia = $row["Direccion_Residencia"];
            $Profesion = $row["Profesion"];
            $Telefono = $row["Telefono"];
            $Correo_Electronico = $row["Correo_Electronico"];
            $Facebook = $row["Facebook"];
            $Instagram = $row["Instagram"];


            $array_datos_de_envio[$contador] =  array(
                                "ID" => $ID,
                                "nombre" => $Nombre,
                                "apellido" => $Apellido,
                                "cedula" => $cedula,
                                "edad" => $Edad,
                                "sexo" => $Sexo,
                                "fecha_de_nacimiento" => $Fecha_de_Nacimiento,
                                "tipo_de_sangre" => $Tipo_de_Sangre,
                                "direccion_residencia" => $Direccion_Residencia,
                                "profesion" => $Profesion,
                                "telefono" => $Telefono,
                                "email" => $Correo_Electronico,
                                "facebook" => $Facebook,
                                "instagram" => $Instagram

                                );

            $contador = $contador + 1;
          }
  
       
          // Free result set
          mysqli_free_result($result);
      } else
        {
          echo "<p>No se encontraron registros que coincidan con su consulta...</p>";  
        }
    }
    else
    {
      echo "ERROR: no se pudo ejecutar: $sql, tipo de error:  " . mysqli_error($link); //Se maneja el error si no se logra ejecutar la consulta sql
    }
  
  // Close connection
  mysqli_close($link);
  
  
  return $array_datos_de_envio;


}