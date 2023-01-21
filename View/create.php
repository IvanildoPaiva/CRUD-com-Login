<?php
session_start();
include_once("../modules/mensagem.php");
require_once("../functions/verificaSession.php");

/*incluindo o arquivo com a função que verifica se existe uma sessão
 caso não exista uma sessão, ele manda o usuário para a tela de login.*/
valida("../login.php");

?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Precedural</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <a class="btn btn-primary m-3" href="../index.php">Listar usuários</a>
  <a class="btn btn-danger m-3" href="../modules/signUp.php">Sair</a>
  <div class="container mt-5 ">

    <h4>Cadastrar Usuário</h4>

    <br />
    <div class="container mt-5">
      <?php include_once("../modules/mensagem.php"); ?>
      <form class="form-control m-5" action="valida.php" method="POST">

        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control " type="text" name="nome" placeholder="Nome completo" require>
        <label class=" form-label" for="email">Email:</label>

        <input class="form-control" type=" email" name="email" placeholder="Digite seu E-mail" require />
        <br />
        <input type="submit" class="btn btn-primary" name="cadUser" value="Cadastrar" />

      </form>
    </div>

    <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
    </body>

</html>