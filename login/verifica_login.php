<?php
// Verifica se estamos conectados ao BD
if ( ! isset( $conexao_pdo ) || ! is_object( $conexao_pdo ) ) {
	exit('Erro na conexão com o banco de dados.');
}

// Une $_SESSION e $POST para verificação
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	$dados_usuario = $_POST;
} else {
}

// Verifica se os campos de usuário e senha existem
// E se não estão em branco
if (isset($dados_usuario['login']) && isset($dados_usuario['senha']) && ! empty($dados_usuario['login']) &&  !empty($dados_usuario['senha'])) {
	// Faz a consulta do nome de usuário na base de dados
	$pdo_checa_user = $conexao_pdo->prepare('SELECT * FROM login WHERE usuario_login = ? LIMIT 1');
	$verifica_pdo = $pdo_checa_user->execute( array( $dados_usuario['login'] ) );
	
	// Verifica se a consulta foi realizada com sucesso
	if ( ! $verifica_pdo ) {
		$erro = $pdo_checa_user->errorInfo();
		exit( $erro[2] );
	}
	
	// Busca os dados da linha encontrada
	$fetch_usuario = $pdo_checa_user->fetch();
	
	// Verifica se a senha do usuario esta correta
	if (  $dados_usuario['senha'] == $fetch_usuario['senha'] ) {
		// O usuário está logado
		$_SESSION['logado']       = true;
		$_SESSION['nome_usuario'] = $fetch_usuario['usuario_login'];
		$_SESSION['cod_login'] = $fetch_usuario['cod_login'];
	} else {
		// Continua deslogado
		$_SESSION['logado']     = false;
		// Preenche o erro para o usuario
		$_SESSION['login_erro'] = 'Usuario ou senha invalidos!!!';
	}
}
?>