<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro</title>
    </head>
    <?php
        include("conexao.php");

        $codigo=$_GET['cpf'];

        //Procura na tabela o registro do codigo igual ao da variavel
        $pdo_verifica = $conexao_pdo->prepare("SELECT *
                                                FROM cliente
                                                WHERE cpf = '$cpf'");

        $pdo_verifica->execute();

        //Captura o dados da linha
        $rs = $pdo_verifica->fetch();

        $nome=$rs['nome'];
        $telefone=$rs['telefone'];
        $email=$rs['email'];
        $senha=$rs['senha'];
        $confirmesenha=$rs['confirmesenha'];

    ?>
    <body>
        <h1>ALTERAR CLIENTE</h1>
        <br>
        <form action='action/cliente.php' method="post">

            <label>nome:</label>
            <input name='nome' type='text' size="10" value='<?php echo $nome;?>'><br><br>

            <label>telefone:</label>
            <input name='telefone' type='text' size="100" value='<?php echo $telefone;?>'><br><br>

            <label>email:</label>
            <input name='email' type='text' size="50" value='<?php echo $email;?>'><br><br>

            <label>senha:</label>
            <input name='senha' type='text' size="50" value='<?php echo $senha;?>'><br><br>

            <label>confirmesenha:</label>
            <input name='confirmesenha' type='text' size="50" value='<?php echo $confirmesenha;?>'><br><br>

            <div align='center'>
                <input name='set' type='hidden' value='up'>
                <input type='submit' value='Enviar'>
            </div>  
            
        </form>
    </body>
</html>