<?php
    $charset_db = 'UTF8';

    //variaveis da conexão
    $base_dados = 'testepet';
    $usuario_bd = 'root';
    $senha_bd   = '';
    $host_db    = 'localhost';

    //Concanetação das variáveis para detalhes da classe PDO
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