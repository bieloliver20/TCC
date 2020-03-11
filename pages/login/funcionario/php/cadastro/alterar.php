<!doctype html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title>Alterar Dados</title>
        <link rel="stylesheet" href="../../css/cadastro.css">
	</head> 
	<body>
	<?php
	include"conexao.php";
	$id =$_GET["id"];
	$dados= mysqli_query($sql, "SELECT * FROM cliente where id_cliente= $id");
	
		while($coluna = mysqli_fetch_array($dados)){ 
			$id = $coluna['id_cliente'];
			$nome = $coluna['nome'];
			$apelido = $coluna['apelido'];
			$email = $coluna['email'];
			$fixo= $coluna['telefone_fixo'];
			$celular= $coluna['telefone_celular'];
			$status= $coluna['status_cliente'];
	  }
	?>
		<form enctype="multipart/form-data" action="salvaralteracao.php?id_cliente=$id" name="form" method="POST">
		<center>
			<fieldset class="cadastro">
				<legend> Alterar Banco</legend>
				<input name="id" 	 type="hidden" value='<?php echo"$id";?>'/>
				<input name="status" type="hidden" value='<?php echo"$status";?>'/>
				<br>
				<br>
				Email:<input name="email" type="email" value='<?php	echo"$email";?>'/>
				<br>
				<br>
				Nome:<input name="nome" type="text" value='<?php	echo"$nome";?>'/>
				<br>
				<br>
				Apelido:<input name="apelido" type="text" value='<?php	echo"$apelido";?>'/>
				<br>
				<br>
				Tel Fixo:<input name="fixo" type="text"value='<?php echo"$fixo";?>'/>
				<br>
				<br>
				Tel Cel:<input name="celular" type="text" value='<?php echo"$celular";?>'/>
				<br>
				<br>
				<input type="submit" value="Enviar"/>
				<input type="reset" value="Limpar"/>        
				<input type="hidden" name="id" value='<?php echo"$id";?>'/>
			</fieldset>
		</form>
		</center>
	</body>
</html>