<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Consulta</title>
    </head>
    <?php
        $busca = '';
        if (isset($_GET['busca'])) $busca = $_GET['busca'];
        include ('conexao.php');
    ?>
    <body>
        <h1>CONSULTA DE CLIENTES</h1>
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
                <td width='30%'><b>Nome</td>
                <td width='20%'><b>Sobrenome</td>
                <td width='20%'><b>Telefone</td>
                <td width='10%'><b>Cpf</b></td>
                <td width='20%'><b>Email</td>
                <td width='20%'><b>Senha</td>
            </tr>
            <?php
                //Inclui o arquivo de configuração
                include('conexao.php');

                //verifica se o usuário existe
                $pdo_verifica = $conexao_pdo->prepare("SELECT * FROM cliente WHERE nome LIKE '$busca%' OR cpf='$busca'");

                $pdo_verifica->execute();

                //captura os dados da linha
                while ($rs = $pdo_verifica->fetch()) {
                    $nome       = isset($rs['nome']) ? $rs['nome'] : '';
                    $sobrenome  = isset($rs['sobrenome']) ? $rs['sobrenome'] : '';
                    $telefone   = isset($rs['telefone']) ? $rs['telefone'] : '';
                    $cpf        = isset($rs['cpf']) ? $rs['cpf'] : '';
                    $email      = isset($rs['email']) ? $rs['email'] : '';
                    $senha      = isset($rs['senha']) ? $rs['senha'] : '';
                ?>
                <tr>
                    <td width='30%'><b><?php echo $nome; ?></td>
                    <td width='10%'><b><?php echo $sobrenome; ?></b></td>
                    <td width='20%'><b><?php echo $telefone; ?></td>
                    <td width='10%'><b><?php echo $cpf; ?></b></td>
                    <td width='20%'><b><?php echo $email; ?></td>
                    <td width='10%'><b><?php echo $senha; ?></b></td>
                    <td width='20%'>

                        <center>
                            <a href='upCliente.php?Cod_Cliente=<?php echo $codigo;?>' title='Editar'><img src='img/editar.png' width="20" height="20"></a>
                            <a href='cliente.php?Cod_Cliente=<?php echo $codigo;?>&set=del' title='Excluir'><img src='img/deletar.png' width='20' height='20'></a>
                        </center>
                    </td>
                </tr>

                <?php
                }
                ?>

        </table>
    </body>
</html>