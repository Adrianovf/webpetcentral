<!DOCTYPE html>
<html lang="pt-br">
    <head>  
        <meta charset="UTF-8">
        <title>Pet Central-Cadastrar</title>
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
            <img src="img/letreiro.png" style="width: 200px; height: auto;">
          </div>        
      </nav>
  </header>
  <!--fim navbar transparente-->
  
    

    <div class="container2">
        <h2 style="color: #152939; margin-left: 40px; margin-top: 30px;">Cadastrar sua conta</h2>
        <br>
        <form action="cliente.php" method="POST">

            <div class="input-group" style="margin-left: 55px;">
                <label class="label">Nome Completo</label>
                <input autocomplete="off" name="nomecompleto" id="nomecompleto" class="input" type="text" maxlength="40">
            </div>
            
            <div class="input-group" style="margin-left: 55px">
                <label class="label">Telefone</label>
                <input autocomplete="off" name="telefone" id="telefone" class="input" type="text" maxlength="11">   
            </div>
        

            <div class="input-group" style="margin-left: 55px">
                <label class="label">Email</label>
                <input autocomplete="off" name="email" id="email" class="input" type="email" maxlength="30">
            </div>

            <div class="input-group" style="margin-left: 55px">
                <label class="label">Senha</label>
                <input autocomplete="off" name="senha" id="senha" class="input" type="password" maxlength="20">
            </div>
            
            <div class="input-group" style="margin-left: 55px">
                <label class="label">Confirmesenha</label>
                <input autocomplete="off" name="confirmesenha" id="confirmesenha" class="input" type="password" maxlength="20">
            </div>

            <br><br>

                <input type="hidden" name="set" value="insert">
                <input type="submit" value="Registrar" class="botao">

        </form>
    </div>
    
    <div class="rodape">
        <p style="text-align: center; font-size: 15px;">&copy; Copyright - 2023 - Todos os direitos reservados - Pentagono Developers</p>
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
include('login/redirect.php');

        $nivel  =$_SESSION['nivel_usuario'];
     
?>