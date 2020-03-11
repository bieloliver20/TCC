<html>
    <head>
		<title> Agenda </title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="css/novoindex.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		<script src="../../../js/jquery.min.js"></script>
		<script src="../../../js/jquery-ui.js"></script>
		
		<?php
			include "./../conexao.php";
			$resultsArray = array();
			$resultQuery = $conn->query("SELECT * FROM servico");
			while ($linha = mysqli_fetch_object($resultQuery)) { 
				$resultsArray[] = $linha;
			}
			$servicosJson = json_encode($resultsArray);
			echo "<script>let servicosJson = $servicosJson;</script>";
		?>

		<script src="./js/selectServicos.js"></script>
		<script>
			function MostrarButton(id,a,c,b) {
				if(document.getElementById(id).style.display == 'block'){
				document.getElementById(id).style.display = 'none';
			}else { document.getElementById(id).style.display = 'block';
document.getElementById(a).style.display = 'none';  document.getElementById(b).style.display = 'none';  document.getElementById(c).style.display = 'none'; 				}
			}
		</script>
    </head>
    <body>
		<div class="container">
		
			<header>
				<nav class="menu">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="index.php">Agenda</a></li>
						<li><a href="php/cadastro.php">Controle de Cadastros</a></li>
						<li><a href="php/historico.php">Histórico de Serviço</a></li>
						<li><a href="php/renda.php">Controle de Renda</a></li>
					</ul>
				</nav>
			</header>
			
			<aside>
				<div class="header"> AGENDAMENTO </div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="img/iconAgendaDia.png" style="filter:invert(100)" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Agenda do Dia" onClick="MostrarButton('agenda_dia', 'calendario_mensal', 'Lembrete', 'novo_horario')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="img/iconAgendaMês.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Calendário Mensal" onClick="MostrarButton('calendario_mensal', 'agenda_dia', 'Lembrete', 'novo_horario')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="img/iconAgendar.png" style="filter:invert(100)" class="icon">
					</div>
					<div class="menuText">
						<input type="button" value="Agendar Novo Horário" onClick="MostrarButton('novo_horario', 'agenda_dia', 'calendario_mensal', 'Lembrete')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="img/iconLembrete.png" style="filter:invert(100)" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Lembrete" onClick="MostrarButton('Lembrete', 'agenda_dia', 'calendario_mensal', 'novo_horario')" class="menuLat"/>
					</div>
				</div>
			</aside>
			
			<div id="agenda_dia" class="hidden">
				<section>
					<div class="banner">
						<div class="titu"> AGENDA DO DIA </div>
					</div>
					
					<label> Funcionário: </label>
					<select id="funci">
						<option value="funci1"> Sem filtro </option>
						<option value="funci1"> Funcionário 1 </option>
						<option value="funci2"> Funcionário 2 </option>
					</select>
					
					<div class="agenda">
						<table>
							<tr>
								<td colspan='3'>Hora</td>
								<td colspan='3'>Nome</td>
								<td colspan='3'>Funcionário</td>
								<td colspan='3'>Serviço</td>
								<td colspan='3'>Status</td>
							</tr>
							<?php
								for ($i=0; $i<20; $i++) { // Substituir por while ($linha = mysqli_fetch_array($query)) {}
									echo "<tr>
											<td  colspan='3'><br></td>
											<td colspan='3'><br></td>
											<td colspan='3'><br></td>
											<td colspan='3'><br></td>
											<td colspan='3'><br></td>
										</tr>";
								}
							?>
						</table>
					</div>
				</section>
			</div>
				<div id="calendario_mensal" class="hidden"> </div>
				<div id="Lembrete" class="hidden"> </div>
			<div id="novo_horario" class="hidden">
				<section>
					<div class="banner">
						<div class="titu"> AGENDAR NOVO HORÁRIO</div>
					</div>
						<div class = "formulario">
							<form action="cadastro/salvaCliente.php" method="post">
							<div class="dados">
							<fieldset class="infoForm">
								<legend> Dados do cliente </legend>
									<label> Nome ou apelido </label> <input name="nome"			type="text" 		placeholder="nome" 		required class="input" >
									<label> Tel.Cel 		</label> <input name="celular"		type="text" 		placeholder="celular"	autofocus class="input" >
									<label> Tel.Fixo		</label> <input name="fixo"		type="text" 		placeholder="celular"	autofocus class="input" >
							</fieldset>
							
							<fieldset class="infoForm">
							<legend> Dados do Serviço </legend>
								<label> Serviço </label>
									<div id="selectsServicos">
										<select idServico="" class="select select-first"></select>
										<button type="button" id="addService" style="font-size:20pt">+</button>
									</div>
									<br>
									<br>
									<label> Data			</label>  	<input name="data"			type="date" 		placeholder="date"		autofocus class="input">		
									<label> Horário			</label>   	<input name="hora"			type="time" 		placeholder="nome" 		required  class="input">			
									<label> Funcionário		</label>		<input name="func"			type="text" 		placeholder="nome" 		required  class="input">
							</fieldset>
							
							<fieldset class="infoForm">
							<legend> Confirmação </legend>
								<label> Valor 	 </label> <input name="valor"			type="number" 		placeholder="nome" 		required  class="input">
								<label> Desconto </label> <input name="valor"			type="number" 		placeholder="nome" 		required  class="input">
								<label> Valor total </label> <input name="valor"			type="number" 		placeholder="nome" 		required  class="input">
								<button> Agendar </button>
							</fieldset>
						</div>
					</form>
					</div>
					</form>
				</section>
			</div>
		</div>
    </body>
</html>