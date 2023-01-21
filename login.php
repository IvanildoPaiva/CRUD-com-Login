<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing-Inl</title>


    <!-- Fontes Google -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

    <!-- Fim Fontes Google -->


    <!-- Estilo do BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fim Estilo do BootStrap -->

    <!-- Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fim Icons -->

    <!-- Estilo custom -->
    <link rel="stylesheet" href="css/styleLogin.css">
    <!-- Fim Estilo custom -->
  </head>


  <!-- Início login-container -->
  <div id="login-container">
    <h1>Sign-in</h1>
    <form action="modules/validaLogin.php" method="post">


      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" placeholder="Digite seu E-mail" autocomplete="off" autofocus>
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" placeholder="Digite sua senha" autocomplete="off">

      <a href="#" id="forgo-pass">Esqueceu sua senha?</a>

      <input type="submit" value="Login">

    </form>

    <!-- Início social-container -->

    <div id="social-container">

      <p>Ou entre pelas suas redes sociais</p>
      <i class="fa fa-facebook-f"></i>
      <i class="fa fa-linkedin"></i>
    </div><!-- Fim social-container -->

    <!-- Início register-container -->
    <div id="register-container">

      <p>Ainda não tem uma conta?</p>
      <a href="#">Registrar-se</a>
    </div><!-- Fim register-container -->

  </div><!-- Fim login-container -->

  </body>

</html>