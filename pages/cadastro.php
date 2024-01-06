<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title>Inscrição</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
	</head>
	<body>
		<div class="header">
			<div class="linha">
				<header>
					<div class="coluna col6"> 
						<h1 class="logo">Inscreva-se no curso!</h1>
					</div>
					<div class="coluna col6">
						<nav>
							<ul class="menu inline sem-marcador">
								<li><a href="../index.html" >Home</a></li> 
								<li><a href="clientes.html" >Alunos</a></li>
								<li><a href="cadastro.php" >Inscreva-se</a></li>
							</ul>
						</nav>
					</div>
				</header>
			</div>
		</div>
		<div class="linha">
			<section>
				<div class="coluna col12">
					<h2 class="centralizar">Inscrição de Alunos</h2>
					<img class="centro" src="../img/violao-do-zero-botton.jpg" alt="Foto empresa 1" width="350" />
					<p class="justificar">Para que você possa estudar conosco, é necessário preencher alguns dados. No formulário abaixo, você irá inserir seu nome completo e seu melhor email. Assim que possível, o departamento de vendas entrará em contato com você para enviar as informações necessárias. <br>
					<b>Obrigado pela preferência!"</b></p>
					<br>
				</div>
			</section>
		</div>
		<div class="conteudo-extra"><br>
			<?php
			  if(isset($_SESSION['msg'])){
			  echo $_SESSION['msg'];
			  unset($_SESSION['msg']);
			}?>
			<form class="centralizar" method="POST" action="processa.php">
			    <label>Insira seu Nome: </label> 
			    <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			    <label>Insira seu E-mail: </label> 
			    <input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>
		        <input class="botao" type="submit" value="Inscrever-se">
		    </form><br>
		</div>
		<br>
		<div class="footer">
		    <div class="linha"> 
		        <footer>
		            <div class="coluna col12"> 
		                <span>&copy; 2021 Online Music School</span>
		            </div>
		        </footer>
		    </div>
		</div>
	</body>
</html>