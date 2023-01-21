<?php
session_start();
include_once("../conexao/conexao.php");
// recebe os dados do formulário para realizar as atualizações no banco
require_once("../functions/verificaSession.php");

/*incluindo o arquivo com a função que verifica se existe uma sessão
 caso não exista uma sessão, ele manda o usuário para a tela de login.*/
valida("../login.php");
if (isset($_POST['update'])) {
  $user_id = $_POST['user_id'];
  $nome = ($_POST['nome']);
  $email = $_POST['email'];
  $query = "UPDATE users SET  nome='$nome', email='$email' WHERE id='$user_id'";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
    header('location:../index.php');
    exit(0);
  } else {
    $_SESSION['mensagem'] = "Erro ao atualizar usuário";
    header('location:index.php');
    exit(0);
  }
}