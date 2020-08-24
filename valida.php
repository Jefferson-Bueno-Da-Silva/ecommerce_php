<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if ($btnLogin) {
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	if ((!empty($usuario)) and (!empty($senha)))
	{
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//PESQUISAR O USUARIO NO BD
		$result_usuario = "SELECT id_usuario, nome, email, senha FROM td_usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario)
		{
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if (password_verify($senha, $row_usuario['senha'])) 
			{
				$_SESSION['id_usuario'] = $row_usuario['id_usuario'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: confirmation.php");
			}else
			{
				$_SESSION['msg'] = "login ou senha incorretos";
				header(include 'login.php');
			}
		}
	}else{
		$_SESSION['msg'] = "login ou senha incorretos";
		header(include 'login.php');
	}
}else{
	$_SESSION['msg'] = "pagina não encontrada";
	header(include 'login.php');
}