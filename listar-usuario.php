<?php include ('cabecalho.php');

require_once __DIR__ . '/class/Modelo/Usuario.php';

$usuarios = Usuario::listarTodos();
?>

<h3>Lista de usuários</h3>

	<table class="table">

	<tr>
		<th>
			<label>ID</label>
		</th>
		<th>
			<label>Nome</label>
		</th>
		<th>
			<label>Sobrneome</label>
		</th>
	</tr>
		<?php foreach ($usuarios as $usuario): ?>
			<tr>
				<td>
				<?= $usuario->id ?>
				</td>

				<td>
				<?= $usuario->nome ?>
				</td>
				
				<td>
				<?= $usuario->sobrenome ?>
				</td>
			</tr>
		<?php endforeach ?>

	</table>


<?php include ('rodape.php'); ?>