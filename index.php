<!DOCTYPE html>
<html>
<head>
	<title>Mia Collucci | Psicóloga</title>
	<meta charset="UTF-8">
   <!-- Css --> 
   <link rel="stylesheet" href="css/index.css">
</head>
<body>
	
   <?php include "nav.php"; ?>

	<div id="container">
		<div id="rgba">
			
			<div id="conteudoum" class="color-white">
				<h1>Mia Collucci, Psicologa</h1>
				<h3>A solução para sua vida!</h3>
				<p> Irei te ajudar a recuperar sua saúde mental!
               </p>
            <?php
               	if(isset($_SESSION['logado'])==false){          
					echo '<button onclick="popLogin()" class="bk-azul-escuro principal">Agendar Consulta</button>';
				}
				else if (isset($_SESSION['logado'])==true AND $_SESSION['logado']>0){
					echo '<a href="agendamento.php" > <button class="bk-azul-escuro principal">Agendar Consulta </button></a>';
				}
			?>
            	<p id="gratis">A primeira consulta é grátis!</p>
			</div>
		</div>
	</div>
</body>


</html>