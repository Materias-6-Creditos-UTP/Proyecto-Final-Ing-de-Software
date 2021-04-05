<?php
$url = "https://github.com/Materias-6-Creditos-UTP/Proyecto-Final-Ing-de-Software";
$urlexists = url_exists( $url );

function url_exists( $url ) {
    echo "Se ejecuta la función de verificación de url";
    
    if(empty($url)){
        return false;
        echo "URL VACIO";
    }

    $options['http'] = array(
        'method' => "HEAD",
        'ignore_errors' => 1,
        'max_redirects' => 0
    );
    

    $body = @file_get_contents($url, NULL, stream_context_create($options));

    if(isset($http_response_header)){
        sscanf($http_response_header[0], 'HTTP/%*d.%*d %d', $httpcode);

        $accepted_responce = array(200, 301, 302);
        if(in_array($httpcode, $accepted_responce)){
            return true;
            echo "TRUE";
        }else{
            return false;
            echo "FALSE";
        }
    }else{
        return false;
        echo "FALSE";
    }
}
