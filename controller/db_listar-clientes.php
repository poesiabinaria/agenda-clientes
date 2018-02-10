<?php

function mostrarListaClientes(){

	include_once "includes/database/db.php";


	$sql = "SELECT id, nome FROM Clientes";
	$result = mysqli_query($connection, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) { 
	    	echo "<a href='visualizar-clientes.php?id=". $row['id'] . "'><p># " . $row['nome'] . "</p></a>"; 
	    }
	} else { echo "0 results"; };

	mysqli_close($connection);
}

	
