<!DOCTYPE html>
<html lang="pt-br">

  <head>
      <meta charset="UTF-8">
      <title>Pet Central-Home</title>
      <link rel="stylesheet" href="petcentral.css">
      <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      </head>
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
		// Inclui o arquivo de conexao
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
       
		
        $busca='';
        if (isset($_GET['busca'])) $busca=$_GET['busca'];
		
		// Verifica se o usuário existe
            $pdo_verifica = $conexao_pdo->prepare("SELECT * 
                                                FROM cliente
                                                WHERE nome LIKE '$busca%'");
            $pdo_verifica->execute();
			
			// Captura os dados da linha
            while ($rs = $pdo_verifica->fetch()){
                   $nome_usuario = $rs['nome'];
			}*/
  ?>

  <body>
    <!--inicio navbar transparente-->
    <header>
      <nav>
        <div class="logo">
            <img src="img/letreiro2.png" style="width: 200px; height: auto;">
        </div>
        <div class="navbar">  
          <a href="entrar.php" class="botao" style="margin-right: 10px; ">
            <b>Entrar</b>
          </a>
          <a href="cadastrar.php" class="botao" style="margin-right: 10px;">
              <b>Cadastre-se</b>
          </a>
          <a href="querodoar.php" class="botao" style="margin-right: 10px;">
            <b>Quero doar</b>
          </a>
          <img src="img/usuario.png" style="width: 50px; height: auto;">
          <?php
            echo $usuario;
          ?>
            <button class="botao">
              Sair
            </button>
        </div>
      </nav>
    </header>
    <!--fim navbar transparente-->
    
      <script type="text/javascript">
        const toggleMenu = () => document.body.classList.toggle("open");
      </script>

        <div class="containerhome">
          <img src="img/cachorrohome.jpg" alt="imgpet" class="img">
          <h3>Nome</h3>
          <h3>Idade</h3>
          <h3>Sexo</h3>
          <h3>Situação</h3>
          <h3>Descrição</h3>
          <br><br>
          <a href="queroadotar.php" style="margin-right: 20px;">
            <button class="botao" style="margin-left: 20px;"><b>Quero adotar<b></button>
          </a>
          <br>
<!--          
          <?php
          if($logado==1) { ?>
              <a href="queroadotar.php" style="text-decoration: none; margin-left: 1000px;">
                <button class="botao">
                  <b>Quero adotar</b>
                </button>
              </a>
          <?php
          } else {
          ?>
              <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
                  <button class="botao">
                      <b>Quero adotar</b>
                  </button>
              </a>
          <?php
          }
          ?>
-->          
        </div>
  

    <footer class="rodape">
      <p style="text-align: center; font-size: 15px;">
        <b>&copy; Copyright - 2023 - Todos os direitos reservados - Pentagono Developers <a href="quemsomos.php" style="text-decoration: none;">Quem somos</a></b>
      </p>
    </footer>
  </body>
</html>