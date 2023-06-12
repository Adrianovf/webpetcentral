<?php
if ( $_SESSION['logado'] != true ) {
	// Envia mensagem de erro ao usuário e retorna a tela de login
	echo "<script>alert('Erro na autenticação do usuário!!!')</script>";
	echo "<script>location.href='entrar.php'</script>";

}