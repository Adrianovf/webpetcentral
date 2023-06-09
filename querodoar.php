<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pet Central-Quero doar</title>
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

        <div class="container2">
            <br>
            <h2 style="color: #152939; text-align: center;">Cadastrar animal</h2>
            <br><br>
            <form action='querodoar.php' method='POST'>

                <div class="input-group">
                    <label class="label">Nome</label>
                    <input autocomplete="off" name="nome_pet" id="nome_pet" class="input" type="text">
                </div>   
                <div class="input-group">
                    <label class="label">Idade</label>
                    <input autocomplete="off" name="idade_pet" id="idade_pet" class="input" type="text">
                </div>
                
                <div class="input-group">
                    <label class="label">Sexo</label>
                    <input autocomplete="off" name="sexo" id="sexo" class="input" type="text">
                </div>
                
                <div class="input-group">
                    <label class="label">Situação</label>
                    <input autocomplete="off" name="situacao_pet" id="situacao_pet" class="input" type="text">
                </div>   
                
                <div class="input-group">
                    <label class="label">Descrição</label>
                    <input autocomplete="off" name="descricao_pet" id="descricao_pet" class="input" type="text">
                </div>
                
                <div class="input-group">
                    <label class="label">Data decadastro</label>
                    <input autocomplete="off" name="data_cadastro" id="data_cadastro" class="input" type="text">
                </div>

                <div class="input-group">
                    <label class="label">Categoria</label>
                    <input autocomplete="off" name="categoria" id="categoria" class="input" type="text">
                </div>
                <br><br>
                <button class="botao">
                        <h4>Cadastrar</h4>
                </button>
                <br>
            </form> 
        </div>
    </body>
    <?php
    //Inclui o arquivo de configuração

    include('conexao.php');

    // Inclui o arquivo de verificação de login
    include('login/verifica_login.php');

    // Se não for permitido acesso nenhum ao arquivo
    // Inclua o trecho abaixo, ele redireciona o usuário para
    // o formulário de login
        //include('login/redirect.php');
    ?>
</html>