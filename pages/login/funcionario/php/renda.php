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
				<div class="header"> Finanças </div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendaDia.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Registrar Gastos" onClick="MostrarButton('registrar_gastos', 'calcular_ganhos', 'calcular_lucro', 'calcular_gastos')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendaMês.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Calcular Ganhos" onClick="MostrarButton('calcular_ganhos', 'registrar_gastos', 'calcular_lucro', 'calcular_gastos')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconAgendar.png" class="icon">
					</div>
					<div class="menuText">
						<input type="button" value="Calcular Gastos" onClick="MostrarButton('calcular_gastos', 'registrar_gastos', 'calcular_ganhos', 'calcular_lucro')" class="menuLat"/>
					</div>
				</div>
				<div class="left_menu">
					<div class="menuIcon">
						<img src="../img/iconLembrete.png" class="icon"> 
					</div>
					<div class="menuText">
						<input type="button" value="Calcular Lucro" onClick="MostrarButton('calcular_lucro', 'registrar_gastos', 'calcular_ganhos', 'calcular_gastos')" class="menuLat"/>
					</div>
				</div>
			</aside>
			
			<div id="registrar_gastos" class="hidden">
				<section>
				</section>
				</div>
				<div id="calcular_ganhos" class="hidden">
				<div id="calcular_lucro" class="hidden">
				<div id="calcular_gastos" class="hidden">
				
			<footer>
					Desenvolvido por Alunos da Etec Jd Angela.
			</footer>
		</div>
    </body>
</html>