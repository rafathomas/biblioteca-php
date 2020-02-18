<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Excluir Livro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<?php
	include("menu.php"); 
	
	require("conexao/conexao.php");

	$idFilme = $_GET["idFilme"];

	$sql = "SELECT * FROM dados WHERE idFilme=".$idFilme;

	$query = mysqli_query($con,$sql);

	$dados = mysqli_fetch_array($query, MYSQLI_BOTH);

	?>
	
	<h1><center>Deseja realmente excluir?</center></h1>
	<form action="ExcFilmebd.php" method="GET">

		<input type="hidden" name="idFilme" value ="<?php echo $dados['idFilme'];?>"><br>

		<center><input type="text" readonly name="txtNome" size="40" style="width:310px; height: 30px" value ="<?php echo $dados['Nome'];?>"></center><br>

		<center><input type="text" readonly name="txtCategoria" size="40" style="width:310px; height: 30px" value ="<?php echo $dados['Categoria'];?>"></center><br>

		<center><button onclick="history.go(-1)" type="reset" class="btn btn-red">VOLTAR</button></center>

		<center><button class="btn btn-green">Confirmar</button></center>
		
	</form>
</body>
</html>