<?php
		//exige que o arquivo exista na pasta
		require("conexao/conexao.php");

		/* Pegando dados enviados */
		$idFilme = $_GET["idFilme"];


		//Comando SQL
		$sql = "DELETE FROM dados WHERE idFilme=".$idFilme;
		
		if(mysqli_query($con,$sql))
		{
			header("location:relFilme.php");
		}
		else
		{
			echo "Erro ao excluir os dados!";
		}
	?>
