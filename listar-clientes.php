<?php
	include_once "includes/partials/head.php";
	include_once "controller/db_listar-clientes.php";
?>


<body>

	<div id="conteudo-principal">

		<?php
			include_once "includes/partials/header.php";
		?>

		<section class="box-central">
			

			<?php 

			if (isset($_GET['salvo'])) {

				if ($_GET['salvo'] == 'sucesso') {
					echo '<h2 class="msg-status-salvar">Cliente salvo com sucesso!</h2>';
				}
				elseif ($_GET['salvo'] == 'erro') { 
					echo '<h2 class="msg-status-salvar">Desculpe, não foi possível salvar os dados sobre o cliente.</h2>'; 
				};

			}

			?>

			

			<div class="listar-clientes">
				<h2>Lista de Clientes:</h2>

				<div class='box-nomes-clientes'>
					<?php mostrarListaClientes(); ?>
				</div>

				

				
			
			<a href="index.php">
				<button class="botao-pequeno" type="button">Início</button>
			</a>
			</div>
		</section>
	</div>
</body>

		
<?php
	include_once "includes/partials/footer.php";
?>
