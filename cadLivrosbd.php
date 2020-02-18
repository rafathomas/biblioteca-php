<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados Enviados</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
	<?php include("menu.php"); ?>
	<h1>Cadastro de Livros</h1>

	<?php
		//exige que o arquivo exista na pasta
	require("conexao/conexao.php");

	/* Pegando dados enviados */
	$varNome = $_GET["varNome"];
	$varAutor = $_GET["varAutor"];
	$varCategoria = $_GET["varCategoria"];
	
		//Mostrando os dados para usuário
	echo "Nome...: ".$varNome."<br>";
	echo "Autor...: ".$varAutor."<br>";
	echo "Categoria...: ".$varCategoria."<br>";
	

		//Comando SQL
	$sql = "INSERT INTO dados (Nome, Categoria, Autor) VALUES ('$varNome','$varCategoria','$varAutor')";

	if(mysqli_query($con,$sql))
	{
		echo "Cadastrado com sucesso!";
	}
	else
	{
		echo "Erro ao inserir!";
	}
	?>
</body>
</html>