<?php

function valida($path)

{
  if (!$_SESSION) {
    header("Location:" . $path);
    exit();
  }
}