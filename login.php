<?php
	session_start();

	if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"]) ) ) ){
		print "<script>location.href='index.php';</script>";
	}

	include("config.php");

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$sql = "SELECT * FROM educador WHERE email_educador = '{$email}' AND senha_educador = '".md5($senha)."'";

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

	$qtd = $res->num_rows;

	if($qtd>0){
		$_SESSION["email"] = $email;
		$_SESSION["id"] = $row->id_educador;
		$_SESSION["nome"] = $row->nome_educador;
		$_SESSION["tipo"] = $row->tipo_educador;
		$_SESSION["foto"] = $row->foto_educador;
		print "<script>location.href='dashboard.php';</script>";
	} else {
		unset($email);
		print "<script>alert('email e/ou Senha incorretos, ou usuario inativo!');</script>";
		print "<script>location.href='index.php';</script>";
	}
?>