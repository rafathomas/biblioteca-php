<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alterar Livros</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<?php
	include("menu.php"); 
	
	require("conexao/conexao.php");

	$idLivro = $_GET['idLivro'];

	$sql = "SELECT * FROM dados WHERE idLivro=".$idLivro;

	$query = mysqli_query($con,$sql);

	$dados = mysqli_fetch_array($query, MYSQLI_BOTH);

	?>
	
	<h1><center>Livros</h1>

	<form action="altLivrosbd.php" method="POST">

		<center><input type="hidden" name="idLivro" value ="<?php echo $dados['idLivro'];?>"></center>

		<center><input type="text" name="txtNome" size="40" style="width:310px; height: 30px" value ="<?php echo $dados['Nome'];?>"><br><br></center>

		<center><input type="text" name="txtAutor" size="40" style="width:310px; height: 30px" value ="<?php echo $dados['Autor'];?>"><br><br></center>

		<center><input type="hidden" name="txtCategoria" size="40" style="width:310px; height: 30px" value ="<?php echo $dados['Categoria'];?>"><br><br></center>

		
		<center><button onclick="history.go(-1)" type="reset" class="btn btn-red">VOLTAR</button>
		
		<button class="btn btn-green">Confirmar</button></center>
		
	</form>
</body>
</html>