<?php
include"conexao.php";
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$apelido = $_POST['apelido'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$fixo = $_POST['fixo'];
	$status = $_POST['status'];

$sql->query("UPDATE cliente SET id_cliente='$id', nome='$nome', email='$email', telefone_fixo='$fixo', telefone_celular='$celular', status_cliente='$status', apelido='$apelido' where id_cliente = $id");

header("location:../cadastro.php");
?>