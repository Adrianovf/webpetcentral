<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pet Central-Quero adotar</title>
        <link rel="stylesheet" href="petcentral.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

        <!--Nav bar transparente-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            body {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: 100dvh;
            }

            /*nav */
            header {
                background-color: #19253b59;
                box-shadow: 0 0 36px 0;
                backdrop-filter: blur(3px);
            }

            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-width: 80%;
                margin: auto;
                padding: 1.2rem 0rem;
            }

            .logo {
                font-size: 1.3rem;
                font-weight: 800;
            }

            .logo a {
                color: #fff;
                text-decoration: none;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                padding: 0;
                background-color: transparent;
                overflow: hidden;
            }

            li {
                padding: 0rem 1.1rem;
                float: left;
            }

            li a {
                color: #fff;
                text-decoration: none;
                font-size: 1rem;
                font-weight: 600;
                letter-spacing: .7px;
            }

            li a:hover {
                color: #91b2ff;
                transition: all .3s ease-in-out
            }

            .button {
                display: flex;
                gap: 1rem;
            }

            .button button {
                font-weight: 500;
                color: #fff;
                border: 1px solid #fff;
                background-color: transparent;
                padding: .5rem 1rem;
                border-radius: 20%;
                cursor: pointer;
            }

            .button button:hover {
                background-color: #fff;
                color: #152939;
                transition: all .3s ease-in-out;
            }
        </style>
        <!--fim navbar transparente-->

            <?php/*
            //Inclui o arquivo de configuração
            include('conexao.php');

            // Inclui o arquivo de verificação de login
            include('login/verifica_login.php');
        
                
            // Se não for permitido acesso nenhum ao arquivo
            // Inclua o trecho abaixo, ele redireciona o usuário para
            // o formulário de login
            include('login/redirect.php');
            
            //include('login/perfil_menu.php');
            $logado      =  $_SESSION['logado'];
            $usuario     =  $_SESSION['nome_usuario'];

            // Faz a consulta do nome de usuário na base de dados
            $pdo_checa_user = $conexao_pdo->prepare('SELECT * FROM cliente WHERE nome = ? LIMIT 1');
            $verifica_pdo = $pdo_checa_user->execute( array( $usuario ) );
	
            $rs = $pdo_checa_user->fetch();

            $cpf= $rs['cpf'];
            $email= $rs['email'];*/
        ?>

    </head>

    <body>
        <!--navbar transparente-->
        <header>
            <nav>
                <div class="logo">
                    <img src="img/letreiro2.png" style="width: 200px; height: auto;">
                </div>
            </nav>
        </header>
        <!--fim navbar transparente-->
        <div class="containerqueroadotar">
            <h2 style="color: #152939;text-align: center; margin-top: 20px;">Informações do cliente</h2>
            <br>
            <form action="cliente.php" method="POST">

                <div class="input-group">
                    <label class="label">Data de nascimento</label>
                    <input autocomplete="off" name="datanascimento" id="datanascimento" class="input" type="date">
                </div>

                <div class="input-group">
                    <label class="label">CPF</label>
                    <input autocomplete="off" name="cpf" id="cpf" class="input" type="text" maxlength="11">
                </div>

                <div class="input-group">
                    <label class="label">E-mail</label>
                    <input autocomplete="off" name="email" id="email" class="input" type="email" maxlength="40" value='<?php echo $email;?>'>
                </div>

                <div class="input-group">
                    <label class="label">Estado</label>
                    <input autocomplete="off" name="estado" id="estado" class="input" type="text" maxlength="40">
                </div>

                <div class="input-group">
                    <label class="label">Cidade</label>
                    <input autocomplete="off" name="cidade" id="cidade" class="input" type="text" maxlength="40">
                </div>

                <div class="input-group">
                    <label class="label">Rua</label>
                    <input autocomplete="off" name="rua" id="rua" class="input" type="text" maxlength="40">
                </div>

                <div class="input-group">
                    <label class="label">Nº</label>
                    <input autocomplete="off" name="numero" id="numero" class="input" type="text" maxlength="4">
                </div>
                <br><br>

                <button class="botao">
                    <h4>Solicitar</h4>
                </button>
                <br>
            </form>            

        </div>

        <div class="containerqueroadotar">
        <h2 style="color: #152939;text-align: center; margin-top: 20px;">Informações do pedido</h2>
            <br>
            <form action="cliente.php" method="POST">

                <div class="input-group">
                    <label class="label">Data do pedido</label>
                    <input autocomplete="off" name="datapedido" id="datapedido" class="input" type="date">
                </div>

                <div class="input-group">
                    <label class="label">Status do pedido</label>
                    <input autocomplete="off" name="statuspedido" id="statuspedido" class="input" type="date">
                </div>
        </div>
    </body>
</html>