<?php
session_start();

include_once("Conexao/conexao.php"); // Conexao com o DB
require_once("functions/verificaSession.php");

/*incluindo o arquivo com a função que verifica se existe uma sessão
 caso não exista uma sessão, ele manda o usuário para a tela de login.*/
valida("login.php");
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


    <!-- Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  </head>
  <a class="btn btn-primary m-3" href="View/create.php">Novo Cadastro</a>
  <a class="btn btn-danger m-3" href="modules/signUp.php">Sair</a>
  <div class="container mt-5">
    <?php include_once("modules/mensagem.php"); ?>

    <table class=" table table-bordered  table-striped table-sm">
      <thead class="table-dark">
        <tr>
          <th class="text-center" scope="row">#</th>
          <th class="text-center" scope=" col">Nome</th>
          <th class="text-center" scope="col">Email</th>
          <th colspan="2" class="text-center" scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $sql = "SELECT * FROM users WHERE ativo = 'A'";
      $sql_result = mysqli_query($conn, $sql);



      if (mysqli_num_rows($sql_result) > 0) {

        foreach ($sql_result as $row) {

      ?>
        <tr>
          <td class="text-center"><?php echo $row['id']; ?></td>
          <td class="text-center"><?php echo $row['nome']; ?></td>
          <td class="text-center"><?php echo $row['email']; ?></td>
          <td class="text-center">
            <a class="btn btn-success btn-sm " href="View/edit.php?id=<?= $row['id']; ?>"><i class="bi bi-pencil"></i>
              Edit</a>
          </td>
          <td class="text-center">
            <a class="btn btn-danger btn-sm " href="View/delete.php?id=<?= $row['id']; ?>"><i class="bi bi-trash3"></i>
              Deletar</a>
          </td>
        </tr>

        <?php

        }
      } else {
        echo "<h5>Não há registro no banco de dados!</h5>";
      }
      ?>
      </tbody>
    </table>

  </div>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  </body>

</html>