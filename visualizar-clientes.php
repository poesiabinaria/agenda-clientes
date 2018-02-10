<?php
	include_once "includes/partials/head.php";
	include_once "controller/db_visualizar-clientes.php";
?>


<body>

	<div id="conteudo-principal">

		<?php
			include_once "includes/partials/header.php";
		?>

		<section class="box-central">

			<h2>Descrição do Cliente:</h2>

			<div class='box-descricao-clientes'>
				<?php 
					visualizarClientes($_GET['id']); 
				?>
			</div>
						
			<a href="listar-clientes.php">
				<button class="botao-pequeno" type="button">Voltar</button>
			</a>
			</div>
		</section>
	</div>
</body>

		
<?php
	include_once "includes/partials/footer.php";
?>
