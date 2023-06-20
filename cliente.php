<?php
include('conexao.php');
include('alertas.php');

if (isset($_POST['nome_cliente'])) $nome_cliente = $_POST['nome_cliente'];
if (isset($_POST['telefone'])) $telefone = $_POST['telefone']; 
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['rua'])) $rua = $_POST['rua'];
if (isset($_POST['numero'])) $numero = $_POST['numero'];
if (isset($_POST['bairro'])) $bairro = $_POST['bairro'];
if (isset($_POST['cidade'])) $cidade = $_POST['cidade'];
if (isset($_POST['uf'])) $uf = $_POST['uf'];

if (isset($_POST['set'])) $set = $_POST['set'];

if (isset($_GET['set'])) $set = $_GET['set'];

if ($set=='insert') {
        $pdo_insere = $conexao_pdo->prepare('INSERT INTO cliente (nome_cliente, telefone, email, rua, numero, bairro, cidade, uf )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $pdo_insere->execute(array($nome_cliente, $telefone, $email, $rua, $numero, $bairro, $cidade, $uf));
        sets();
}/* elseif ($set == 'up') {
        //Executa alteração no registro do cliente
        $pdo_insere = $conexao_pdo->prepare("UPDATE cliente
                                             SET nome=?, telefone=?, email=?, senha=?
                                             WHERE email=?");

        $pdo_insere->execute(array($nome, $telefone, $email, $senha));
        sets();
} elseif ($set == 'del') {
        // Exclui o registro do cliente
        $pdo_delete = $conexao_pdo->prepare("DELETE FROM cliente
                                             WHERE email='$email'");
        $pdo_delete->execute();
        del();
}*/
?>