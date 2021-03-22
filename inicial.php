<?php
require_once "comandos/class.php";
$comando = new comando();

if(isset($_POST["entrar"]))
{
	$comando->login();
}
else{
	echo "<script>alert('Faça login antes de entrar');window.location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/CSS"
		href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/CSS"
		href="css/estilo.css">
    <title>Home</title>
</head>
<body>
<div class="center">
<div class="cadastro">
<form action="usuario.php" method="post">
    <label for="id">ID </label><input type="number" name="id" id="id" required><br><br>
    <label for="nome2">Nome </label><input type="text" name="nome2" id="nome2" required><br><br>
    <label for="preco">Preço </label><input type="number" name="preco" id="preco" required><br><br>
    <label for="quantidade">Quantidade </label><input type="text" name="quantidade" id="quantidade" required><br><br>
    <button type="submit" name="produto" value="produto">Cadastrar</button>
</form>
</div>
</div>
</body>
</html>