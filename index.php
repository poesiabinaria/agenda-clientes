<?php
	include_once "includes/partials/head.php";
?>


<body>
	<div id="conteudo-principal">

		<?php
			include_once "includes/partials/header.php";
		?>

		<section class="box-central">
			<div class="cadastro">
				<form action="salvar-dados-cliente.php" method="POST">
					<p>Nome: <input name="nome-cliente" placeholder="Rivânia Rosa" required autofocus="true"></p> 
					<p>E-mail: <input name="email-cliente" placeholder="cliente@exemplo.com"></p>
					<p>Telefone: <input name="telefone-cliente" placeholder="(xx) x.xxxx-xxxx"></p>
					<p>Descrição: <textarea name="descricao-servico" maxlength="800" required></textarea></p>
					<button id="botao-salvar" type="submit"> Salvar </button>
				</form>
				
				<div class="box-botoes">
					<a href="listar-clientes.php">
						<button class="botao-pequeno" type="button"> Mostrar Clientes </button>
					</a>
				</div>
			</div>
		</section>
	</div>
</body>

		
<?php
	include_once "includes/partials/footer.php";
?>
