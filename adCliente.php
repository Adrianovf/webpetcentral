<html>
	<head>
		<meta charset="UTF-8">
		<title>Sistema de Cadastro de Clientes</title>
	</head>
	<body>
		<h1>CADASTRO</h1>
		<br>
		<form action="cadastro.php" method="post">
			<label>Nome:</label>
			<input name="nome" type="text" size="50"><br><br>

			<label>Telefone:</label>
			<input name="telefone" type="text" size="50"><br><br>

			<label>Email:</label>
			<input name="email" type="email" size="14" maxlength="14"><br><br>

			<label>Senha:</label>
			<input name="senha" type="password" size="50"><br><br>

			<label>Confirme Senha:</label>
			<input name="confirmesenha" type="password" size="20"><br><br>

			<div align="center">
				<input type="submit" value="Cadastrar">
			</div>
		</form>
	</body>
</html>
