<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<input type="password" name="senha">
		<input type="submit" name="acao" value="Enviar">
	</form>
	<?php 
		if(isset($_POST['acao'])){
			$senha = $_POST['senha'];
			if(preg_match('/^[A-Z]{1}[a-z]{3}[0-9]{3,}$/', $senha)){
				echo '<h1>Sua senha foi redefinida com sucesso!</h1>';
			}else{
				echo '<h1>Sua senha precisa ter ao menos um caractere maiúsculo, dois caracteres normais e pelo menos 3 números.</h1>';
			}
		}

	?>

</body>
</html>