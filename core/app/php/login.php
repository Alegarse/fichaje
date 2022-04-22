<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');

    error_reporting(E_ALL);


	require_once('utils.php');
	require_once('models/Session.php');


    // Local variables
    $usuario = "";
    $pass = "";


	// Recogemos las vbles enviadas por POST
	foreach ($_REQUEST as $campo => $valor)	{
		$$campo = strToSql($valor);
	}

	$result = login($usuario, $pass);

    die();