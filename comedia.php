<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filmes</title>
</head>
<body>
	<?php include("menu.php"); ?>

	<style type="text/css">
		
		table, tr, td, th{
			border-collapse: collapse;
			border: 1px;
			border-style: solid;
			padding: 20px;

		}
		tr:hover{
			background-color: red;
		}
	</style>
	<?php
		//exige que o arquivo exista na pasta
		require("conexao/conexao.php");

		$sql = "SELECT * FROM dados where Categoria='COMEDIA'" ;

		$sqlfilmes = mysqli_query($con,$sql);
	
		$sqltotalfilmes = mysqli_num_rows($sqlfilmes);
	if($sqltotalfilmes > 0)
	{


	?>

		<center><TABLE borders=1 bgcolor= #D8D8D8 fontcolor= #000000></center> 
			<tr>
				<CAPTION>INFORMAÇÕES</CAPTION>
				
				<td>ID</td>
				<td>NOME</td>
				<td>CATEGORIA</td>
				<td>AUTOR</td>
				<th>EDITAR</th>
				<th>EXCLUIR</th>
			</tr>
	
	<?php
		for($i = 0; $i < $sqltotalfilmes; $i++)
		{
			$dados = mysqli_fetch_assoc($sqlfilmes);

			echo "<tr>";
			echo "<td>$dados[idLivro]</td>";
			echo "<td>$dados[Nome]</td>";
			echo "<td>$dados[Categoria]</td>";
			echo "<td>$dados[Autor]</td>";
			echo "<td><a href=altLivros.php?idLivro=$dados[idLivro]><img src='img/editar.png'width='30'></a></td>";
			echo "<td><a href=excLivro.php?idLivro=$dados[idLivro]><img src='img/apagar.png'width='30'></a></td>";
			
			echo "</tr>";
		}
	
?>
</table>
<?php

}else{
	echo "<h1> <center> NÃO A LIVROS CADASTRADOS</h1></center>";
	echo "<p align=center> <a href=cadLivros.php class=botao> DESEJA ADICIONAR UM LIVRO? </a>";
}	
?>
</body>
</html>