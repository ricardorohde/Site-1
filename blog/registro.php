<?php
		session_start();
		
		//verifica se o usuario está logado e tem privilégios
		if($_SESSION["login"] == "sucesso"){
			$url = 'index.php';
			header("Location: $url");
		}

	if($_GET['acao'] == 'salvar'){
		//criação de variáveis
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$verificaSenha = $_POST['verificaSenha'];
		$telefone = $_POST['telefone'];
		$tipo = 1;
		$data = date("Y-m-d");
		
		if($nome != '' && $email != ''){
			if($senha!= '' && $verificaSenha != ''){
				if($senha == $verificaSenha){
					if($telefone != ''){
						
							//========================= verifica titulo no BD ==============
							// Conexão com o Banco de Dados
							include "conexao.php";
							//query SQL
							$strSQLB = "SELECT * FROM usuarios WHERE email = '".$email."' ";
							// Executa a query (o recordset $rs contém o resultado da query)
							$resultado = mysqli_query($conexao, $strSQLB);
							//num_rows retorna 0, caso  titulo não exista
							$num_rows = mysqli_num_rows($resultado);
							//================== se o titulo não existir é criada a página =======
							
							//se o email não existir no BD
							if($num_rows == 0){
								
								$senha = md5($senha);
								
								//inserir dados no BD
								$strSQLB = "INSERT INTO usuarios(nome,email,senha,telefone,tipo,data) VALUES('".$nome."','".$email."','".$senha."','".$telefone."','".$tipo."','".$data."')";
								$resultado = mysqli_query($conexao,$strSQLB);
								mysqli_close($conexao);
								
								
								$url = 'http://ciadainformatica.com/index.php?cadastro=sucesso';
								header("Location: $url");
							}else{
								echo "<script>alert('ERRO:email já existe!')</script>";	
							}
						
					}else{
						echo "<script>alert('ERRO:Você precisa inserir um numero de telefone!')</script>";	
					}
		
				}else{
					echo "<script>alert('ERRO:Senha e verificação de senha devem ser iguais!')</script>";	
				}
				
			}else{
					echo "<script>alert('ERRO:Você deve inserir senha e a verificação de senha!')</script>";	
				}
		
		}else{
				echo "<script>alert('ERRO:Você deve inserir nome e email!')</script>";	
			}
		
	}
?>	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cia da informática - Registro</title>
		<meta name="description" content="Cia da informática - registro"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon"/>

		<!-- bibliotecas css do bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		
		
		<link rel="stylesheet" href="css/estilo.css" />

		<!-- bibliotecas javascript do bootstrap-->
		
		<script text="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      height: 300px;
      margin: auto;
  }
  </style>

  		<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 		 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-69560455-1', 'auto');
 		 
 		ga('send', 'pageview');

		</script>
		

													<!--pluguin do facebook-->
													<div id="fb-root"></div>
													<script>(function(d, s, id) {
													  var js, fjs = d.getElementsByTagName(s)[0];
													  if (d.getElementById(id)) return;
													  js = d.createElement(s); js.id = id;
													  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
													  fjs.parentNode.insertBefore(js, fjs);
													}(document, 'script', 'facebook-jssdk'));</script>
													<!--pluguin do facebook-->

													<script>
													(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
													(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
													m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
													})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

													ga('create', 'UA-69560455-1', 'auto');
													ga('send', 'pageview');

													</script>
													
													<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
	</head>
	<body>
		<nav role="navigation" class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
    				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">                    
                    	<span class="sr-only">Navegação Responsiva</span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>                
                	</button>
      				<a class="navbar-brand" href="#">Cia da informática</a>
    			</div>
    			<div id="navbarCollapse" class="collapse navbar-collapse">
    				<ul class="nav navbar-nav">
     					<li><a href="../index.php">Home</a></li>
						<li><a href="../contato.php">Contato</a></li>
      					<li><a href="../aplicativos.php">Aplicativos</a></li> 
      					<li><a href="index.php">Blog</a></li> 
    				</ul>
    			
  				</div>
  			</div>
		</nav>


		<!-- section principal -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-7">

<section id="corpo">

<p>Nesta página você pode se registrar e ficar por dentro de cursos, noticias, novidades e beneficios ineditos. </p>

<?php
if($_GET['mensagem'] == 'sucesso'){
	echo '<div class="alert alert-success" role="alert">sucesso!</div>';
}

if($_GET['mensagem'] == 'falha'){
	echo '<div class="alert alert-danger" role="alert">tente novamente.</div>';
}

	
?>
<form method="POST"  action="?acao=salvar" id="form">
					<fieldset>
					<legend>Formulário de cadastro</legend>
					
						<div class="form-group">
							<label>Nome</label>	
							<span class="glyphicon glyphicon-user"></span>
							<input name="nome" maxlength="100" type="text" class="form-control" placeholder="Nome" name="nome" />
						</div>

						
					
						<div class="form-group">
							<label for="emailVerifica">Email</label>
							<span class="glyphicon glyphicon-envelope"></span>
							<input name="email" maxlength="200" type="email" class="form-control" id="emailVerifica" placeholder="Email" name="email" />
						</div>

				
						<div class="form-group">
							<label for="verificaSenha">Senha</label>
							<span class="glyphicon glyphicon-warning-sign"></span>
							<input name="senha" maxlength="150" type="password" class="form-control" id="verificaSenha" placeholder="Senha">
						</div>
						
						<div class="form-group">
							<label for="verificaSenha">Digite a senha novamente</label>
							<span class="glyphicon glyphicon-warning-sign"></span>
							<input name="verificaSenha" maxlength="200"type="password" class="form-control" id="verificaSenha" placeholder="verificação de senha">
						</div>
						
						
						<div class="form-group">
							<label>Telefone</label>
							<span class="glyphicon glyphicon-phone"></span>
							<input name="telefone" maxlength="14" type="text" class="form-control" placeholder="Telefone" name="telefone"  />
						</div>

					
						
					<button type="submit" class="btn btn-default navbar-right">CADASTRAR</button>
				</fieldset>

</form>


</section>
				</div>
				<div class="col-md-5">
				
					<aside>
							<h4>
								<span class="glyphicon glyphicon-film"></span>Vídeo
							</h4>
							<iframe width="100%" height="280" src="https://www.youtube.com/embed/s9Voh0YT6uU?rel=0" frameborder="0" allowfullscreen></iframe><br /><br />
							
							<h4>
								<span class="glyphicon glyphicon-globe"></span>
									Sua empresa precisa estar na internet
							</h4>

  							<img src="imagens/site.jpg" class="img-circle" width="90%" height="150px"  alt="seu site">
							<br />
							<p>Uma das formas mais convenientes de divulgação atualmente é com uso da internet pois você chega a seus clientes com muito mais agilidade.
							</p>

							<p>Confira nossos planos, agende visitas e faça orçamentos, garantimos os melhores preços com a qualidade que o seu negocio merece. Estaremos a disposição, Cia da informática, o nosso negocio é software.
							</p>
							<br />
					</aside>
				</div>

			</div>
		</div>


				<!-- section principal -->
		<div class="container-fluid"  id="rodape">
			<div class="row-fluid">
				<div class="col-md-12">
																<footer >
																	<h4 style="text-align:center;">Copyright 2013 - by Cia da informática</h4>
																	<h4 style="text-align:center;">
																		<span class="glyphicon glyphicon-link"></span>
																		<a href="https://www.facebook.com/blogciadainformatica/">Facebook</a>
																	</h4>
																	<br> 
																	
																	<div style="float:left; padding:6px;">
																	<h5 >Parceiros</h5>
																	<a href="http://api.hostinger.com.br/redir/4901187" target="_blank"><img src="http://hostinger.com.br/banners/br/hostinger-80x31-2.gif" alt="Hospedagem" border="0" width="80" height="31" /></a>
																	<br/>
																	<br/>
																	<a href="https://analytics.google.com" target="_blank"><img src="imagens/Google_Analytics.png" alt="Google Analytics" border="0" width="80" height="31" /></a>
																	<br/>
																	<br/>
																	<a href="https://www.google.com.br/intl/pt-BR/adsense/start/#?modal_active=none" target="_blank"><img src="imagens/google_adsense.png" alt="Google Adsense" border="0" width="80" height="31" /></a>
																	</div>
																	
																	<div style="float:left; padding:6px;">
																		<h5 >Redes Sociais</h5>
																		<g:plusone></g:plusone>
																		<br /><br />
																		<div class="fb-like" data-href="http://ciadainformatica.com/" style="float:right;  z-index:5; "></div>
																		<br/><br/><br/>
																	<script src="https://apis.google.com/js/platform.js">
																	</script>
																	<div class="g-ytsubscribe" data-channelid="UCraSA7CL-s7Vietf4t92i4g" data-layout="default" data-count="default"></div>
																	</div>
																</footer>
				</div>
			</div>
		</div>

	</body>
</html>