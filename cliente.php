<?php
include('conexao.php');
include('alertas.php');

if (isset($_POST['nome'])) $nome = $_POST['nome'];
if (isset($_POST['telefone'])) $nome = $_POST['telefone'];
if (isset($_POST['cpf'])) $nome = $_POST['cpf'];
if (isset($_POST['email'])) $nome = $_POST['email'];
if (isset($_POST['senha'])) $nome = $_POST['senha'];
if (isset($_POST['confirmesenha'])) $nome = $_POST['confirmesenha'];
if (isset($_POST['estado'])) $nome = $_POST['estado'];
if (isset($_POST['cidade'])) $nome = $_POST['cidade'];
if (isset($_POST['bairro'])) $nome = $_POST['bairro'];
if (isset($_POST['rua'])) $nome = $_POST['rua'];
if (isset($_POST['uf'])) $nome = $_POST['uf'];

if (isset($_POST['set'])) $set = $_POST['set'];

if (isset($_GET['cpf'])) $cpf = $_GET['cpf'];
if (isset($_GET['set'])) $set = $_GET['set'];

if ($set=='insert') {
        $pdo_insere = $conexao_pdo->prepare('INSERT INTO cliente (nome, telefone, cpf, email, senha, confirmesenha, estado, cidade, bairro, rua, uf)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $pdo_insere->execute(array($nome, $telefone, $cpf, $email, $senha, $confirmesenha, $estado, $cidade, $bairro, $rua, $uf));
        sets();
} elseif ($set == 'up') {
        //Executa alteração no registro do cliente
        $pdo_insere = $conexao_pdo->prepare("UPDATE cliente
                                             SET nome=?, telefone=?, cpf=?,email=?, senha=?, confirmesenha=?, estado=?, cidade=?, bairro=?, rua=?, uf=?
                                             WHERE email=?");
        $pdo_insere->execute(array($nome, $telefone, $cpf, $email, $senha, $confirmesenha, $estado, $cidade, $bairro, $rua, $uf));
        sets();
} elseif ($set == 'del') {
        // Exclui o registro do cliente
        $pdo_delete = $conexao_pdo->prepare("DELETE FROM cliente
                                             WHERE email='$email'");
        $pdo_delete->execute();
        del();
}
?>