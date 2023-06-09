<?php
    /* Define o limite de tempo da sessão em 60 minutos */
    session_cache_expire(60);
        
    // Inicia a sessão
    session_start();

    // Variável que verifica se o usuário está logado
    if ( ! isset( $_SESSION['logado'] ) ) {
        $_SESSION['logado'] = false;
    }

    // Erro do login

    //$_SESSION['login_erro']     =  false;

    $charset_db = 'UTF8';

    //variaveis da conexão
    $base_dados = 'petcentral10';
    $usuario_bd = 'root';
    $senha_bd   = '';
    $host_db    = 'localhost';

    //Concatenação das variáveis para detalhes da classe PDO
    $detalhes_pdo = 'mysql:host=' . $host_db . ';';
    $detalhes_pdo .= 'dbname=' . $base_dados . ';';
    $detalhes_pdo .= 'charset=' . $charset_db . ';';

    //Tenta conectar
    try {
        
        //cria a conexão PDO com a base de dados
        $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);

        //echo "Banco de dados conectado!!!";
    } catch (PDOException $e) {

        //se der algo errado, mostra o erro PDO
        echo "Erro ao abrir o banco !!!";
        
        //Mata o script
        die();
    }
?>