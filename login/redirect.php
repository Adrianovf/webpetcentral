<?php
if ( $_SESSION['logado'] != true ) {
	// Envia mensagem de erro ao usuário e retorna a tela de login
	echo "<script>alert('Usuário não encontrado!!!')</script>";
	echo "<script>location.href='entrar.php'</script>";
}
?>