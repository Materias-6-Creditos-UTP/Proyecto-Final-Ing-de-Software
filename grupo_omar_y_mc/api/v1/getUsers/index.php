<?php

// API que obtiene info de paginas la pagina principal del portal


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Accept");
header("Access-Control-Expose-Headers: *");
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Methods:GET");

// Verificamos que el request se exclusicamente GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $Authorization = null;
    $Authorization_Saved = "UTP00000000000000000002021";
    //buscamos las variables que pasamos por header en el cliente
    foreach (getallheaders() as $variable => $valor) 
    {

        if($variable == "Authorizationtoken")
        {
            $Authorization = $valor;
        }
    }
     $Authorization = "UTP00000000000000000002021";
    if ($Authorization != null)
        {
            if($Authorization === $Authorization_Saved)
            {
                peticion_GET();
            } else {
                http_response_code(401);
                $respuesta = array(
                    "status" => "Authorization Error", 
                    "description" => "No tienes autirización para acceder a esta información"
                );
                print(json_encode($respuesta, JSON_PRETTY_PRINT)); 
            }
         
        } else {
            http_response_code(400);
            $respuesta = array(
                "status" => "error",
                "description" => "parametros no encontrados" );
            print(json_encode($respuesta, JSON_PRETTY_PRINT));
        }
       
} else {
    http_response_code(400);
}





function peticion_GET()
{   
    require_once __DIR__ . "/../../../functions/db/getUsers.php";
    

            http_response_code(200);
            $respuesta = array(
                "status code" => 200,
                "data" => getusers()
            );


print(json_encode($respuesta, JSON_PRETTY_PRINT));
}
