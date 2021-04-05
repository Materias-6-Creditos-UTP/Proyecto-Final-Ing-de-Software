<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container position-absolute top-50 start-50 translate-middle">

<div class="row g-5 align-items-center">
    <div class="col-6">
      <div class="p-3 border bg-light">

      <h1>Tu Direccion MAC es:</h1>
<div class="alert alert-primary" role="alert">
  
<?php
$mac='UNKNOWN';
foreach(explode("\n",str_replace(' ','',trim(`getmac`,"\n"))) as $i)
if(strpos($i,'Tcpip')>-1){$mac=substr($i,0,17);break;}
echo $mac;
?>

      </div>
    </div>
  
  </div>



</div>


</div>
    
</body>
</html>