<?php

function visualizaraClientes($id){

	include_once "includes/database/db.php";


	$sql = "SELECT nome, email, telefone, descricao FROM Clientes WHERE id='$id'";
	$result = mysqli_query($connection, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<p>Nome: " . $row['nome'] . "</p>" .
				"<p>E-mail: "  . $row['email'] . "</p>" .
				"<p>Telefone: "  . $row['telefone'] . "</p>" .
				"<p>Descrição: "  . $row['descricao'] . "</p>";
	    }
	} else { echo "0 results"; };

	mysqli_close($connection);
}