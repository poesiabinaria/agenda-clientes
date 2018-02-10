<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'agendaclientes';

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

mysqli_set_charset($connection,"utf8");

if (!$connection) {
	die("Falha na conexão: " . mysqli_connect_error());
}
// echo "Conexão estabelecida. <br><br>" ;