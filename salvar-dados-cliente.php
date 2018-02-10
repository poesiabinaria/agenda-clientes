<?php

include_once "includes/bd.php";

$nomeCliente = $_POST['nome-cliente'];
$emailCliente = $_POST['email-cliente'];
$telefoneCliente = $_POST['telefone-cliente'];
$descricaoServico = $_POST['descricao-servico'];


$sql = "INSERT INTO Clientes (nome, email, telefone, descricao)
VALUES (
'$nomeCliente',
'$emailCliente',
'$telefoneCliente',
'$descricaoServico'
)";

if (mysqli_query($connection, $sql)) {
	Header("Location: listar-clientes.php?salvo=sucesso");
   echo "Cliente registrado com sucesso";
} else {
	Header("Location: listar-clientes.php?salvo=erro");
   echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

