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
    <h1>CADASTRO DE CLIENTES</h1>
    <br>
    <h3><a href='../inicio.php' title='voltar'>Voltar ao início</a></h3>
    <br>
    <form name="form1" method="GET" action="verCliente.php">
        <div>
            <p>
                <label>Busca Cliente por Código ou pelo Nome:</label>
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
            <td width='10%'><b>Codigo</b></td>
            <td width='30%'><b>Nome</td>
            <td width='20%'><b>Telefone</td>
            <td width='20%'><b>E-mail</td>
            <td width='20%'><b>Ações</td>
        </tr>
        <?php
            //Inclui o arquivo de configuração
            include('conexao.php');

            //verifica se o usuário existe
            $pdo_verifica = $conexao_pdo->prepare("SELECT * FROM clientes WHERE Nome_Cliente LIKE '$busca%' OR Cod_Cliente='$busca'");

            $pdo_verifica->execute();

            //captura os dados da linha
            while ($rs=$pdo_verifica->fetch()){
                $codigo     = $rs['Cod_Cliente'];
                $nome       = $rs['Nome_Cliente'];
                $telefone   = $rs['Tel_Cliente'];
                $Email      = $rs['Email_Cliente'];
        ?>
        <tr>
            <td width='10%'><b><?php echo $codigo;?></b></td>
            <td width='30%'><b><?php echo $nome;?></td>
            <td width='20%'><b><?php echo $telefone;?></td>
            <td width='20%'><b><?php echo $Email;?></td>
            <td width='20%'>
                <center>
                    <a href='upCliente.php?Cod_Cliente=<?php echo $codigo;?>' title='Editar'><img src='img/editar.png' width="20" height="20"></a>
			        <a href='action/cliente.php?Cod_Cliente=<?php echo $codigo;?>&set=del'title='Excluir'><img src='img/deletar.png' width='20' height='20'></a>
                </center>
            </td>
        </tr>
        <?PHP
            }
        ?>
    </table>
</body>
</html>
