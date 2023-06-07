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
                <td><b>Nome</td>
                <td><b>telefone</td>
                <td><b>cpf</td>
                <td><b>email</b></td>
                <td><b>senha</td>
                <td><b>confirmesenha</td>
                <td><b>estado</td>
                <td><b>cidade</td>
                <td><b>bairro</td>
                <td><b>rua</td>
                <td><b>uf</td>
                
            </tr>
            <?php
                //Inclui o arquivo de configuração
                include('conexao.php');

                //verifica se o usuário existe
                $pdo_verifica = $conexao_pdo->prepare("SELECT * FROM cliente WHERE nome LIKE '$busca%' OR cpf='$busca'");

                $pdo_verifica->execute();

                //captura os dados da linha
                while ($rs = $pdo_verifica->fetch()) {
                    $nome               = isset($rs['nome']) ? $rs['nome'] : '';
                    $telefone           = isset($rs['telefone']) ? $rs['telefone'] : '';
                    $cpf                = isset($rs['cpf']) ? $rs['cpf'] : '';
                    $email              = isset($rs['email']) ? $rs['email'] : '';
                    $senha              = isset($rs['senha']) ? $rs['senha'] : '';
                    $confirmesenha      = isset($rs['confirmesenha']) ? $rs['confirmesenha'] : '';
                    $estado             = isset($rs['estado']) ? $rs['estado'] : '';
                    $cidade             = isset($rs['cidade']) ? $rs['cidade'] : '';
                    $bairro             = isset($rs['bairro']) ? $rs['bairro'] : '';
                    $rua                = isset($rs['rua']) ? $rs['rua'] : '';
                    $uf                 = isset($rs['uf']) ? $rs['uf'] : '';
                ?>
                
                <tr>
                    <td><b><?php echo $nome; ?></td>
                    <td><b><?php echo $telefone; ?></b></td>
                    <td><b><?php echo $cpf; ?></td>
                    <td><b><?php echo $email; ?></b></td>
                    <td><b><?php echo $senha; ?></td>
                    <td><b><?php echo $confirmesenha; ?></b></td>
                    <td><b><?php echo $estado; ?></b></td>
                    <td><b><?php echo $cidade; ?></b></td>
                    <td><b><?php echo $bairro; ?></b></td>
                    <td><b><?php echo $rua; ?></b></td>
                    <td><b><?php echo $uf; ?></b></td>
                    <td>

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