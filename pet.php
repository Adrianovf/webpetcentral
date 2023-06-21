<?php
include('conexao.php');
include('alertas.php');

if (isset($_POST['nome'])) $nome_pet = $_POST['nome_pet'];
if (isset($_POST['idade'])) $idade_pet = $_POST['idade_pet']; 
if (isset($_POST['sexo'])) $sexo = $_POST['sexo']; 
if (isset($_POST['situacao'])) $situacao_pet = $_POST['situacao_pet']; 
if (isset($_POST['descricao'])) $descricao_pet = $_POST['descricao_pet']; 
if (isset($_POST['categoria'])) $categoria = $_POST['categoria']; 

if (isset($_POST['set'])) $set = $_POST['set'];

if (isset($_GET['set'])) $set = $_GET['set'];

if ($set=='insert') {
        $pdo_insere = $conexao_pdo->prepare('INSERT INTO pet (nome_pet, idade_pet, sexo, situacao_pet, descricao_pet, data_cadastro, categoria)
        VALUES (?, ?, ?, ?, ?, ?, ?)');
        $pdo_insere->execute(array($nome_pet, $idade_pet, $sexo, $situacao_pet, $descricao_pet, $data_cadastro, $categoria));
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