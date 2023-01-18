<?php
session_start();
include_once("../conexao/conexao.php");

//verifica se existe uma valor "cadUser" vindo pelo método POST,se existir ele recebe os dados do formulário
//filtrando e realizando a sanetização para não inserir caracteres expeciais e verificando se é um tipo válido de E-mail
//caso seja, executa uma Query inserindo no banco os valores recebidos no formulário de cadastro.
if (isset($_POST['cadUser'])) {
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  $sql = "INSERT INTO users (nome, email) VALUES ('$nome', '$email')";

  $sql_result = mysqli_query($conn, $sql);
  if ($sql_result) {
    $_SESSION['mensagem'] = "Usuário cadastrado com sucesso!";
    header('location:create.php');
    exit(0);
  } else {
    $_SESSION['mensagem'] = "Usuário não cadastrado!";
    header('location:create.php');
    exit(0);
  }
}



// verifica se existe uma valor "update" vindo pelo método POST,se existir ele recebe os dados do formulário
// junto com o ID, depois monta no formulário com dados preenchidos
//depois executa uma Query UPDATE passando os valores que tem na tabela do banco filtrado pela condição WHERE (onde)
// o ID seja igual ao existente no banco de dadose então realiza as atualizações no banco.

$query_run = mysqli_query($conn, $query);

if ($query_run) {
  $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
  header('location:index.php');
  exit(0);
} else {
  $_SESSION['mensagem'] = "Erro ao atualizar usuário";
  header('location:index.php');
  exit(0);
}