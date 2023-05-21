<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Sistema de Cadastro - Pet Central</title>
	</head>
	<body>
		<h1>NOVO CLIENTE</h1>
		<form action='action/cliente.php' method='POST'>
			<label>nome:</label>
			<input name="nome" type='text' size='100'><br><br>
			<label>sobrenome:</label>
			<input name="nome" type='text' size='100'><br><br>
			<label>telefone:</label>
			<input name="telefone" type='text' size='50'><br><br>
			<label>cpf:</label>
			<input name="nome" type='text' size='100'><br><br>
			<label>email:</label>
			<input name="email" type='text' size='50'><br><br>
			<label>senha:</label>
			<input name="nome" type='text' size='100'><br><br>
			<div align='center'>
				<input name='set' type='hidden' value='ad'>
				<input type='submit' value='Enviar'>
			</div>
		</form>
	</body>
</html>
