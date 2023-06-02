<?php
    include('conexao.php');
    include('alertasC.php');

    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $set = isset($_POST['set']) ? $_POST['set'] : (isset($_GET['set']) ? $_GET['set'] : '');

    if ($set == 'ad') {

        $pdo_insere = $conexao_pdo->prepare('INSERT INTO cliente
        (nome, sobrenome, telefone, cpf, email, senha)
        VALUES (?, ?, ?, ?, ?, ?)');
        $pdo_insere->execute(array($nome, $sobrenome, $telefone, $cpf, $email, $senha));

        sets();

    } elseif ($set == 'up') {

        //Executa alteração no registro do cliente
        $pdo_insere = $conexao_pdo->prepare("UPDATE cliente
                                             SET nome=?, sobrenome=?, telefone=?, email=?, senha=?
                                             WHERE cpf=?");

        $pdo_insere->execute(array($nome, $sobrenome, $telefone, $email, $senha, $cpf));

        sets();
    } elseif ($set == 'del') {

        // Exclui o registro do cliente
        $pdo_delete = $conexao_pdo->prepare("DELETE FROM cliente
                                             WHERE cpf=?");

        $pdo_delete->execute(array($cpf));
        del();
    }
?>
