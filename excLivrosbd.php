<?php
		//exige que o arquivo exista na pasta
		require("conexao/conexao.php");

		/* Pegando dados enviados */
		$idLivro = $_GET["idLivro"];


		//Comando SQL
		$sql = "DELETE FROM dados WHERE idLivro=".$idLivro;
		
		if(mysqli_query($con,$sql))
		{
			header("location:relLivro.php");
		}
		else
		{
			echo "Erro ao excluir os dados!";
		}
	?>
