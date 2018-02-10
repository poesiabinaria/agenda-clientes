<?php

function visualizarClientes($id){

	include_once "includes/database/db.php";


	$sql = "SELECT nome, email, telefone, descricao FROM Clientes WHERE id='$id'";
	$result = mysqli_query($connection, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<p class='titulo-pag-descr'>Nome:</p>" . "<p>" . $row['nome'] . "</p>" .
				"<p class='titulo-pag-descr'>E-mail:</p>"  . "<p>" . $row['email'] . "</p>" .
				"<p class='titulo-pag-descr'>Telefone:</p>"  . "<p>" . $row['telefone'] . "</p>" .
				"<p class='titulo-pag-descr'>Descrição:</p>"  . "<p>" . $row['descricao'] . "</p>";
	    }
	} else { echo "0 results"; };

	mysqli_close($connection);
}