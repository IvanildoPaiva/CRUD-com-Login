<?php
session_start();
include_once("../conexao/conexao.php");
require_once("../functions/verificaSession.php");

/*incluindo o arquivo com a função que verifica se existe uma sessão
 caso não exista uma sessão, ele manda o usuário para a tela de login.*/
valida("../login.php");

// faz um verificação se existe o ID caso o usuário tente burlar
if (!empty($_GET['id'])) {
  $id = $_GET['id'];

  $query = "UPDATE users SET ativo = 'N' WHERE id = '$id'";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $_SESSION['mensagem'] = "Usuário excluído com sucesso!";
    header('location:../index.php');
    exit(0);
  } else {
    $_SESSION['mensagem'] = "Erro ao excluir usuário";
    header('location:../index.php');
    exit(0);
  }
}