<?php

session_start();
require_once("../conexao/conexao.php");


$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = md5(filter_input(INPUT_POST, 'password'));


$consulta = ("SELECT * FROM users WHERE email='$email' AND password='$password'");
$consulta = mysqli_query($conn, $consulta);

$user = mysqli_fetch_array($consulta);

if (!empty($user)) {
  $_SESSION['id'] = $user['id'];
  $_SESSION['nome'] = $user['nome'];
  $_SESSION['email'] = $user['email'];
  header("Location:../index.php");
  exit();
} else {
  header("Location:../login.php");
}