<html>
    <head>
		<title> Agenda </title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/cadastro.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
			<script>
				function MostrarButton(id,a,c,b,d) {
					if(document.getElementById(id).style.display == 'block'){
					document.getElementById(id).style.display = 'none';
				}else { document.getElementById(id).style.display = 'block';
 document.getElementById(a).style.display = 'none';  document.getElementById(b).style.display = 'none';  document.getElementById(c).style.display = 'none';   document.getElementById(d).style.display = 'none';				}
				}
			</script>
    </head>
    <body>
		<div class="container">
		
			<header>
				<nav class="menu">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="../index.php">Agenda</a></li>
						<li><a href="cadastro.php">Controle de Cadastros</a></li>
						<li><a href="historico.php">Histórico de Serviço</a></li>
						<li><a href="renda.php">Controle de Renda</a></li>
					</ul>
				</nav>
			</header>
			
			<aside>
				<div class="header"> Controle de Cadastros </div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendaDia.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Cadastrar Cliente" onClick="MostrarButton('cadastrar_clientes', 'editar_cliente', 'clientes_desativados', 'desativar_cliente', 'cadastrar_funcionario')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendaMês.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Editar Cliente" onClick="MostrarButton('editar_cliente', 'cadastrar_clientes', 'clientes_desativados', 'desativar_cliente', 'cadastrar_funcionario')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendar.png" class="icon">
					</div>
					<div class="menuText">
						<input type="button" value="Desativar Cliente" onClick="MostrarButton('desativar_cliente', 'cadastrar_clientes', 'editar_cliente', 'clientes_desativados', 'cadastrar_funcionario')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconLembrete.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Clientes Desativados" onClick="MostrarButton('clientes_desativados', 'cadastrar_clientes', 'editar_cliente', 'desativar_cliente', 'cadastrar_funcionario')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconLembrete.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Cadastrar Funcionário" onClick="MostrarButton('cadastrar_funcionario', 'clientes_desativados', 'cadastrar_clientes', 'editar_cliente', 'desativar_cliente')" class="menuLat"/>
					</div>
				</div>
			</aside>
			
			<div id="cadastrar_clientes" class="hidden">
				<section>
					<div class="banner">
						<div class="titu"> CADASTRAR CLIENTE </div>
					</div>
					<div class = "formulario">
						<form action="cadastro/salvaCliente.php" method="post">
							<div class="dados">
								<label> Nome:			</label>    <input name="nome"		type="text" 		placeholder="nome" 		required  class="input"><br>
								<label> Apelido: 		</label>	<input name="apelido"	type="text" 		placeholder="apelido"  			  class="input"><br>
								<label> Tel.Cel:		</label>	<input name="celular"	type="text" 		placeholder="celular"	autofocus class="input"><br>
								<label> Tel.Fixo: 		</label>  	<input name="fixo"		type="text" 		placeholder="fixo"  	autofocus class="input"><br>
								<label> Email: 			</label>    <input name="email"		type="email"		placeholder="email" 	autofocus class="input"><br>
											<a><input type="submit" value="Cadastrar"	class="btn-2"/></a>
											<a><input type="reset" 	value="Limpar"	 	class="btn-2"/></a>
							</div>
						</form>
					</div>
				</section>
			</div>
			
			<div id="editar_cliente" class="hidden"> 
				<section>
					<div class="banner">
						<div class="titu"> EDITAR CLIENTE </div>
					</div>
					<?php
						include "cadastro/conexao.php";
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
						<td align="center">Alterar</td>

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
								<td><a href=\"cadastro/alterar.php?id='$id'\">  ALTERAR  </a></td>
							</tr>";
							}
							
						?>
						</table>
						<br>
				</section>
			</div>
				
			<div id="clientes_desativados" class="hidden"> </div>
				
			<div id="desativar_cliente" class="hidden"> </div>
				
			<div id="cadastrar_funcionario" class="hidden">
				<section>
					<div class="banner">
						<div class="titu"> CADASTRAR FUNCIONÁRIO </div>
					</div>
					<div class = "formulario">
						<form action="cadastro/salvaFuncionario.php" method="post">
							<div class="dados">
								<label> Nome: 		</label>    <input name="nome"		type="text" 		placeholder="nome" 		required  class="input"><br>
								<label> Email: 		</label>	<input name="email"		type="email" 		placeholder="email"  			  class="input"><br>
								<label> Tel.Cel: 	</label>	<input name="celular"	type="text" 		placeholder="celular"	autofocus class="input"><br>
								<label> Tel.Fixo: 	</label>  	<input name="fixo"		type="text" 		placeholder="fixo"  	autofocus class="input"><br>
								<label> Senha: 		</label>    <input name="senha"		type="password"		placeholder="senha" 	autofocus class="input"><br>
											<a><input type="submit" value="Cadastrar"	class="btn-2"/></a>
											<a><input type="reset" 	value="Limpar"	 	class="btn-2"/></a>
							</div>
						</form>
					</div>
				</section>
			</div>
								
			<footer>
					Desenvolvido por Alunos da Etec Jd Angela.
			</footer>
		</div>
    </body>
</html>