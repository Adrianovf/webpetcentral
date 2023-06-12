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
                <td><b>email</b></td>
                <td><b>senha</td>
                <td><b>confirmesenha</td>
                
            </tr>
            <?php
                //Inclui o arquivo de configuração
                include('conexao.php');

                //verifica se o usuário existe
                $pdo_verifica = $conexao_pdo->prepare("SELECT * FROM cliente WHERE nome LIKE '$busca%'");

                $pdo_verifica->execute();

                //captura os dados da linha
                while ($rs = $pdo_verifica->fetch()) {
                    $nome               = isset($rs['nome']) ? $rs['nome'] : '';
                    $telefone           = isset($rs['telefone']) ? $rs['telefone'] : '';
                    $email              = isset($rs['email']) ? $rs['email'] : '';
                    $senha              = isset($rs['senha']) ? $rs['senha'] : '';
                    $confirmesenha      = isset($rs['confirmesenha']) ? $rs['confirmesenha'] : '';
                    
                ?>
                
                <tr>
                    <td><b><?php echo $nome; ?></td>
                    <td><b><?php echo $telefone; ?></b></td>
                    <td><b><?php echo $email; ?></b></td>
                    <td><b><?php echo $senha; ?></td>
                    <td><b><?php echo $confirmesenha; ?></b></td>

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