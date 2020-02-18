<?php
		//exige que o arquivo exista na pasta
		require("conexao/conexao.php");

		/* Pegando dados enviados */
		$idLivro = $_POST['idLivro'];
		$txtNome = $_POST["txtNome"];
		$txtAutor = $_POST["txtAutor"];
		$txtCategoria = $_POST["txtCategoria"];

		//Comando SQL
		$sql = "UPDATE dados SET Nome = '$txtNome', categoria = 
		'$txtCategoria', Autor = '$txtAutor' WHERE idLivro = '$idLivro'";
		
		if(mysqli_query($con,$sql))
		{
			header("location:relLivro.php");
		}
		else
		{
			echo "Erro ao atualizar os dados!";
		}
	?>
