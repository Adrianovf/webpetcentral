<?php
include('conexao.php');
include('alertas.php');

if (isset($_POST['nomecompleto'])) $nomecompleto = $_POST['nomecompleto']; else echo "Nome não digitado!";
if (isset($_POST['telefone'])) $telefone = $_POST['telefone']; 
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['senha'])) $senha = $_POST['senha'];
if (isset($_POST['confirmesenha'])) $confirmesenha = $_POST['confirmesenha'];

if (isset($_POST['set'])) $set = $_POST['set'];

if (isset($_GET['set'])) $set = $_GET['set'];

if ($set=='insert') {
        if ($senha == $confirmesenha){
        $pdo_insere = $conexao_pdo->prepare('INSERT INTO cliente (nome, telefone, email, senha )
        VALUES (?, ?, ?, ?)');
        $pdo_insere->execute(array($nomecompleto, $telefone, $email, $senha));
        sets();
        } else {
                echo"<script>alert('A senha e a confirmação de senha nao correspondem!')</script>";
                echo"<script>location.href='cadastrar.php'</script>";
        }
} elseif ($set == 'up') {
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
}
?>