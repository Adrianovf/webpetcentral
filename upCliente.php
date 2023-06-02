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
        $sobrenome=$rs['sobrenome'];
        $telefone=$rs['telefone'];
        $cpf=$rs['cpf'];
        $email=$rs['email'];
        $senha=$rs['senha'];
    ?>
    <body>
        <h1>ALTERAR CLIENTE</h1>
        <br>
        <form action='action/cliente.php' method="post">

            <label>CPF:</label>
            <input name='nome' type='text' size="10" value='<?php echo $nome;?>'><br><br>

            <label>Sobrenome:</label>
            <input name='sobrenome' type='text' size="100" value='<?php echo $sobrenome;?>'><br><br>

            <label>Telefone:</label>
            <input name='telefone' type='text' size="50" value='<?php echo $telefone;?>'><br><br>
            
            <label>Cpf:</label>
            <input name='cpf' type='text' size="50" value='<?php echo $cpf;?>'><br><br>

            <label>E-mail:</label>
            <input name='email' type='text' size="50" value='<?php echo $email;?>'><br><br>

            <label>Senha:</label>
            <input name='senha' type='text' size="50" value='<?php echo $senha;?>'><br><br>

            <div align='center'>
                <input name='set' type='hidden' value='up'>
                <input type='submit' value='Enviar'>
            </div>  
            
        </form>
    </body>
</html>