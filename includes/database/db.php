<?php

$serverName = 'us-cdbr-iron-east-05.cleardb.net';
$userName = 'b0944efd1aaf6a';
$password = '7ba0d3b2';
$dbName = 'heroku_ccd040a127862f6';

$connection = mysqli_connect($serverName, $userName, $password, $dbName);

mysqli_set_charset($connection,"utf8");

if (!$connection) {
	die("Falha na conexão: " . mysqli_connect_error());
}
// echo "Conexão estabelecida. <br><br>" ;