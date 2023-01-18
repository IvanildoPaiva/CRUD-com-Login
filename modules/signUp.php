<?php
//deslogando o usuário e matando as sessões.
session_start();
session_destroy();
header("Location:../login.php");
exit();