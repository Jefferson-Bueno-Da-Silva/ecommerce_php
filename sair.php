<?php
session_start();
unset($_SESSION['id_usuario'],$_SESSION['nome'],$_SESSION['email']);

$_SESSION['msg'] = "deslogado com sucesso";
header("Location: login.php");
