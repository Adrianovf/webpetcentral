<?php
    include ('../conexao.php');
    include ('alertasC.php');

    if (isset($_POST['nome'])) $nome=$_POST['nome'];
    if (isset($_POST['sobrenome'])) $nome=$_POST['sobrenome'];
    if (isset($_POST['telefone'])) $telefone=$_POST['telefone'];
    if (isset($_POST['cpf'])) $nome=$_POST['cpf'];
    if (isset($_POST['email'])) $email=$_POST['email'];
    if (isset($_POST['senha'])) $nome=$_POST['senha'];

    if (isset($_POST['set'])) $set=$_POST['set'];
    if (isset($_GET['set'])) $set=$_GET['set'];

    if ($set=='ad') {

        $pdo_insere = $conexao_pdo->prepare('INSERT INTO cliente
        (nome, sobrenome, telefone, cpf, email, senha)
        VALUES (?, ?, ?, ?, ?, ?)');
        $pdo_insere->execute( array( $nome, ,$sobrenome, $telefone, $cpf, $email, $senha));

        sets();

    }elseif($set=='up') {

        //Executa alteração no registro do cliente
        $pdo_insere = $conexao_pdo->prepare("UPDATE cliente
                                             SET nome=?, sobrenome=?, telefone=?, email=?, senha=?
                                             WHERE cpf=?");

        $pdo_insere -> execute( array($nome, $sobrenome, $telefone, $cpf, $email, $senha) );

        sets();
    } elseif ($set=='del') {

        // Exclui o registro do cliente
        $pdo_delete = $conexao_pdo->prepare("DELETE FROM cliente
                                             WHERE cpf='$cpf'");

        $pdo_delete -> execute();
        del();
    }
?>