<!doctype html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title>Listar dados</title>
		
		<link rel="stylesheet" href="../../css/cadastro.css">		
	</head> 
<body>
<?php
include"conexao.php";
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$fixo = $_POST['fixo'];

$val1 = $sql->query("SELECT * FROM funcionario WHERE email = '$email'");
$val2 = $sql->query("SELECT * FROM funcionario WHERE nome = '$nome'");
$check1 = mysqli_num_rows($val1);
$check2 = mysqli_num_rows($val2);



if (($check1 == 1 and $check2 == 1)){
	echo"<h3>Funcionario já registrado</h3><br></br>";
}

else {
	$sql->query("INSERT INTO funcionario(nome, email, telefone_fixo, telefone_celular, senha) VALUES ('$nome','$email','$fixo', '$celular', '$senha')");
    echo"Cadastro Realizado com sucesso!!!<br></br>";
}

?>
</body>
</html>
