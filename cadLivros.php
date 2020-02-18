<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Livros</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php include("menu.php"); ?>
	
	<h1><center>CADASTRAR LIVROS</center></h1>
	<form action="cadLivrosbd.php" method="GET">
	
		<center><td><select id= "select" name="varCategoria"required> 
        <option>Selecione...</option>
        <option value="ACAO">Ação</option>
        <option value="COMEDIA">Comédia</option>
        <option value="ROMANCE">Romance</option>
        <option value="SUSPENSE">Suspense</option>
        <option value="INFANTIL">Infantil</option>
        <option value="FICCAO">Ficção</option>
		</select><center>
			
		<br>
			<input type="text" name="varNome" placeholder="Nome do Livro" size="40" style="width:310px; height: 30px" required><br><br>
			<input type="text" name="varAutor" placeholder="Nome do Autor" size="40" style="width:310px; height: 30px" required><br><br>
		
		
		<button class="btn btn-green">Salvar</button>
		<button type="reset" class="btn btn-red">Limpar</button>
	</form>	
</body>
</html>