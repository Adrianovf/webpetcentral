<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Cadastro</title>
</head>
<?php
    $busca = '';
    if (isset($_GET['busca'])) $busca = $_GET['busca'];
    include ('conexao.php');
?>
<body>
    <h1>CADASTRO DE CLIENTES PETCENTRAL</h1>
    <br>
    <h3><a href='../inicio.php' title='voltar'>Voltar ao início</a></h3>
    <br>
    <form name="form1" method="GET" action="verCliente.php">
        <div>
            <p>
                <label>Busca Cliente por Cpf ou pelo Nome:</label>
                <input name="busca" type="text" autofocus/>

                <label>&nbsp</label>
                <input type="submit" value="Procurar" />
            </p>
        </div>
    </form>
    <br>
    <a href='adCliente.php'>Novo Cliente</a>
    <br><br>
    <table width='100%'>
        <tr bgcolor='fff000'>
            <td width='5%'><b>Nome</b></td>
            <td width='5%'><b>Sobrenome</b></td>
            <td width='5%'><b>Telefone</b></td>
            <td width='5%'><b>CPF</b></td>
            <td width='5%'><b>E-mail</b></td>
            <td width='5%'><b>Senha</b></td>
        </tr>
        <?php
            // Inclui o arquivo de configuração
            include('conexao.php');

            // Verifica se o usuário existe
            $pdo_verifica = $conexao_pdo->prepare("SELECT * FROM clientes WHERE nome LIKE :busca OR cpf=:busca");
            $pdo_verifica->bindValue(':busca', $busca . '%');
            $pdo_verifica->execute();

            // Captura os dados da linha
            while ($rs = $pdo_verifica->fetch()) {
                $nome = $rs['nome'];
                $sobrenome = $rs['sobrenome'];
                $telefone = $rs['telefone'];
                $cpf = $rs['cpf'];
                $email = $rs['email'];
                $senha = $rs['senha'];
        ?>
        <tr>
            <td width='5%'><b><?php echo $nome;?></b></td>
            <td width='5%'><b><?php echo $sobrenome;?></b></td>
            <td width='5%'><b><?php echo $telefone;?></b></td>
            <td width='5%'><b><?php echo $cpf;?></b></td>
            <td width='5%'><b><?php echo $email;?></b></td>
            <td width='5%'><b><?php echo $senha;?></b></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
