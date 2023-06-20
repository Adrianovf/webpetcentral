<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <title>Pet Central-Entrar</title>
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

    <br>
    <div class="container1">
        <br>

        <h1 style="color: #152939; margin-left: 40px;">Acesse sua conta</h1>
        <br><br>

        <form action='home.php' method='POST'>

            <div class="input-group">
                <label class="label">Endereço de email</label>
                <input autocomplete="off" name="email" id="email" class="input" type="email">
            </div>
            <br>

            <div class="input-group">
                <label class="label">Senha</label>
                <input autocomplete="off" name="senha" id="senha" class="input" type="password">
            </div>
            <br>

            <button class="botao">
                <b>Entrar</b>
            </button>
            <br><br><br>
        

        </form>
        
        <h3 style="margin-left: 85px;"><b>Não tem uma conta?</b></h3>

        <a href="cadastrar.php">
            <b style="margin-left: 135px; margin-top: 10px; text-decoration: underline; text-align: center;">Clique aqui</b>
        </a>
        <br>

    </div>
</body>