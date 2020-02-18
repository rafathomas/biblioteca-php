<?php
	//Local do banco 
	$Local = "127.0.0.1"; //verificar
	//Usuário do banco
	$Usuario = "root";
	//Senha do banco
	$Senha = "";
	//Banco de dados
	$Banco = "livros";

	//Conexão com o banco de dados
	$con = new mysqli($Local,$Usuario,$Senha,$Banco); 

	
	
	//Testa e mostra o erro se houver
	if(mysqli_connect_error()){
		trigger_error(mysqli_error());
	}
?>