<html>
    <head>
		<title> Agenda </title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="../css/novoindex.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
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
						<li><a href="../index.php">Agenda</a></li>
						<li><a href="cadastro.php">Controle de Cadastros</a></li>
						<li><a href="historico.php">Histórico de Serviço</a></li>
						<li><a href="renda.php">Controle de Renda</a></li>
					</ul>
				</nav>
			</header>
			
			<aside>
				<div class="header"> Histórico </div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendaDia.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Histórico Mensal" onClick="MostrarButton('historico_mensal', 'historico_trimestral', 'registros_desativados', 'historico_anual')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendaMês.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Histórico Trimestral" onClick="MostrarButton('historico_trimestral', 'historico_mensal', 'registros_desativados', 'historico_anual')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendar.png" class="icon">
					</div>
					<div class="menuText">
						<input type="button" value="Historico Anual" onClick="MostrarButton('historico_anual', 'historico_mensal', 'historico_trimestral', 'registros_desativados')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconLembrete.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Registros Desativados" onClick="MostrarButton('registros_desativados', 'historico_mensal', 'historico_trimestral', 'historico_anual')" class="menuLat"/>
					</div>
				</div>
			</aside>
			
			<div id="historico_mensal" class="hidden">
				<section>
				</section>
				</div>
				<div id="historico_trimestral" class="hidden">
				<div id="registros_desativados" class="hidden">
				<div id="historico_anual" class="hidden">
				
			<footer>
					Desenvolvido por Alunos da Etec Jd Angela.
			</footer>
		</div>
    </body>
</html>