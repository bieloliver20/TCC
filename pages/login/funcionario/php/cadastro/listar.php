<!doctype html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title>Listar dados</title>
		
		<link rel="stylesheet" href="cadastroCSS.css">		
	</head> 
<body>

<?php
echo "<center>Listagem dos Clientes<br>
<br>";
include "conexao.php";
$pinto = mysqli_query($sql, "SELECT * FROM cliente");
?>
<table border="1">
<tr>
<td align="center">Id</td>
<td align="center">Nome</td>
<td align="center">Apelido</td>
<td align="center">Email</td>
<td align="center">Telefone Fixo</td>
<td align="center">Telefone Celular</td>
<td align="center">Status</td>


</tr>

	
<?php 
  while($coluna = mysqli_fetch_array($pinto)) {
     $id = $coluna['id_cliente'];
     $nome = $coluna['nome'];
     $apelido = $coluna['apelido'];
     $email = $coluna['email'];
     $fixo= $coluna['telefone_fixo'];
     $celular= $coluna['telefone_celular'];
     $status= $coluna['status_cliente'];
	echo"
	<tr>
        <td>$id</td>
        <td>$nome</td>
        <td>$apelido</td>
        <td>$email</td>
        <td>$fixo</td>
        <td>$celular</td>
        <td>$status</td>
	</tr>";
	}
	
?>
</table>
<br>
	<a href='cadastro.html'>Voltar para Cadastro</a><br><br>
	
</body>
</html>