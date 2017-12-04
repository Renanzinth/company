<?php include ('cabecalho.php'); ?>

<h3>Cadastro de usuário</h3>

<form action="cadastrar-usuario.php">

	<table class="table">
		
		<tr>
			<td><label>Nome</label></td>
			<td><input class="form-control" type="text" placeholder="Insira o nome" name="nome"></td>
		</tr>

		<tr>
			<td><label>Sobrenome</label></td>
			<td><input class="form-control" type="text" placeholder="Insira o sobrenome" name="sobrenome"></td>
		</tr>

		<tr>
			<td><button class="btn btn-primary">Enviar</button></td>
		</tr>

	</table>
</form>

<?php include ('rodape.php'); ?>