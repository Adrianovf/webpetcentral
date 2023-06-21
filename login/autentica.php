<?php

	// Inclui o arquivo de verificaÃ§Ã£o de login
	include('login/verifica_login.php');

	// Se não for permitido acesso nenhum ao arquivo
	// Inclua o trecho abaixo, ele redireciona o usuÃ¡rio para
	// o formulário de login
	include('login/redirect.php');

    $id_usuario=$_SESSION['user_id'];
    $usuario=$_SESSION['nome_usuario'];
    $nivel=$_SESSION['nivel_usuario'];

/*    
    if ($nivel==1) {
        echo "Administrador: ".$usuario;
    }elseif($nivel==2) {
        echo "Supervisor: ".$usuario;
    }else {
        echo "Operador: ".$usuario;
    }
  */
?>