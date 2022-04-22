<?php
    set_time_limit(0);


    # Petition HTTP POST by PHP
    #$url = "http://34.250.87.155/assistanceControlWebService/index.php"; # Production petition
    $url = "http://127.0.0.1/assistanceControlWebService/index.php";

    #$action = "save_checkIn"; #E
    #$firma = "a5699b4d940aae29436bdf6b97ddcbf916f242b16a670d7558fd6c744679bc63"; #E
    #$operacion = "E";
    #$hora = "2022-04-06 08:57:24";

    $action = "save_checkOut"; #S
    $firma = "6f9eb0fd5af46a68adcb9d0a73a1b3f6c67de9db54c2855549c8264396931daf"; #S
    $operacion = "S";
    $hora = "2022-04-06 17:00:36";

    $userid = 4;
    $lat = "36.6430603";
    $lon = "-4.4932755";
    $dir = "Avenida Manuel Fraga Iribarne 15";

    $petition = [
        "action" => $action,
        "firma" => $firma,
        "userid" => $userid,
        "hora" => $hora,
        "latitud" => $lat,
        "longitud" => $lon,
        "dir" => $dir,
        "operacion" => $operacion
    ];

    # JSON Petition options
    $options = array(
        "http" => array(
            "header" => "Content-type: application/json\r\n",
            "method" => "POST",
            "content" => json_encode($petition)
        ),
    );
    # Preparing petition
    $context = stream_context_create($options);

    # Doing petition
    $result = file_get_contents($url, false, $context);

    # Proccesing response
    if ($result === false) {
        echo "Error procesing petition";
        exit;
    } else {
        echo $result;
    }
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/assistancecontrolwebservice/index.php">
        <input type="text" name="action" value="save_checkOut">
        <input type="text" name="firma" value="6f9eb0fd5af46a68adcb9d0a73a1b3f6c67de9db54c2855549c8264396931daf">
    </form>
</body>
</html>