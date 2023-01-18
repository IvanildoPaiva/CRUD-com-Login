<?php

function valida()

{
  if (!$_SESSION) {
    header("Location:login.php");
    exit();
  }
}