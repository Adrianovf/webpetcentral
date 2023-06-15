<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>Pet Central-Home</title>
      <link rel="stylesheet" href="petcentral.css">
      <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


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
    <!--inicio navbar transparente-->
    <header>
      <nav>
          <div class="logo">
              <img src="img/letreiro2.png" style="width: 200px; height: auto;">
          </div>

          <div class="navbar">  

              <a href="entrar.php" class="botao" style="margin-right: 10px;">
                  <b>Entrar</b>
              </a>

              <a href="cadastrar.php" class="botao" style="margin-right: 10px;">
                  <b>Cadastre-se</b>
              </a>

              <a href="querodoar.php" class="botao">
                  <b>Quero doar</b>
              </a>

          </div>
      </nav>
  </header>

  <!--fim navbar transparente-->
      
      <script type="text/javascript">
        const toggleMenu = () => document.body.classList.toggle("open");
      </script>
    

    <!-- incluindo o arquivo JavaScript do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <div class="containergroup">
      <div class="row">
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/cachorrohome.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genfeminino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left: 0px;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
              
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>


        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/gatohome.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genmasculino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>


        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/amarelinho.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genfeminino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>


        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/yorkshire.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genmasculino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        

        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/gatopixabay1.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genfeminino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/gatopixabay2.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genmasculino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/cachorropixabay1.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genfeminino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/cachorropixabay2.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genmasculino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/cachorropixabay3.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genfeminino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/gatopixabay3.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genmasculino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/cachorropixabay4.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genfeminino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
        
        
        <div class="col-md-3">
          <div class="containerhome">
            <!-- Conteúdo do contêiner -->
          <img src="img/gatopixabay4.jpg" style="width: 250px; height: 250px; border-radius: 20px; justify-content: center;">
          <img src="img/genmasculino.png" style="width: 40px; height: 40px; float: right; position: relative;">
          <h3 style="margin-left:0px;;">Nome</h3>
          <h3 style="margin-left: 0px;">Localização</h3>
          <h3 style="margin-left: 0px;">Idade</h3>
          <h3 style="margin-left: 0px;">Peso</h3>
          <h3 style="margin-left: 0px;">Raça</h3>
          <a href="entrar.php" style="text-decoration: none; margin-left: 1000px;">
              <button class="botao">
                  <b>Quero adotar</b>
              </button>
          </a>
          <!--fim do conteudo do container-->
          </div>
        </div>
      </div>
    </div>
    
      <footer class="rodape">
          <p style="text-align: center; font-size: 15px;"><b>&copy; Copyright - 2023 - Todos os direitos reservados - Pentagono Developers <a href="quemsomos.php" style="text-decoration: none;">Quem somos</a></b></p>
      </footer>
  </body>
</html>