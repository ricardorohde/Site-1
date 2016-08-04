<?php 
		session_start();
		
		//verifica se o usuario está logado e tem privilégios
		if($_SESSION["login"] == "sucesso"){
			if($_SESSION["tipo"] == 2){
				
				
			}else{	
			echo "<script>alert('você precisa ter privilégios para entrar nesta página !');
					window.location.href = 'index.php';
				</script>";
			}
		}else{	
			echo "<script>alert('você precisa estar logado para entrar nesta página !');
					window.location.href = 'index.php';
				</script>";
		}
		
		
		if($_GET['acao'] == 'criar'){
			
			$titulo = $_POST["titulo"];
			$subtitulo =  $_POST["subtitulo"];
			$video =  $_POST["video"];
			$autor =  $_POST["autor"];
			$texto =  $_POST["texto"];
			$arquivo = $_FILES["foto"];
			
			if("image/jpeg" == $_FILES["foto"]["type"] || "image/jpg" == $_FILES["foto"]["type"]){
				if($titulo != '' && $subtitulo != ''){
					if($video != '' && $autor != ''){
						if($texto != ''){


							
							//$city = $link, $city);
							//$titulo = mysql_escape_string($titulo);

//$subtitulo = mysqli_real_escape_string($conexao, $subtitulo);

							//========================= verifica titulo no BD e converte strings ==============
							// Conexão com o Banco de Dados
							include "conexao.php";

							

							$subtitulo = mysqli_real_escape_string($conexao, $subtitulo);
							$autor = mysqli_real_escape_string($conexao, $autor);
							$texto = mysqli_real_escape_string($conexao, $texto);
							$video = mysqli_real_escape_string($conexao, $video);
							
							 $titulo = strtolower($titulo);
							
							//============ formatando titulo chave ===================
							$a = array('.','"', '<','>', '$','(', ')',';',"'",'ç','é','è','ó','ò','í','ì','á','à','ú','ù','|','?',' ','ã','õ','%','!', '\\','/','®','©','0','2','Ã','³');

							$b = array('','', '','', '','', '','',"",'c','e','e','o','o','i','i','a','a','u','u','','','','a','o','','','','','','','','', '', '');
							$titulo =  str_replace($a,$b,$titulo);
							$titulo = utf8_encode ($titulo);
							$titulo = mysqli_real_escape_string($conexao, $titulo);


							//query SQL
							$strSQLB = "SELECT * FROM blog WHERE titulo = '".$titulo."' ";
							// Executa a query (o recordset $rs contém o resultado da query)
							$resultado = mysqli_query($conexao, $strSQLB);
							//num_rows retorna 0, caso  titulo não exista
							$num_rows = mysqli_num_rows($resultado);

							
							
							//================== se o titulo não existir é criada a página =======
							if($num_rows == 0){
								
								
								// página modelo
								$modelo = '
									<?php 
														// chave da página
														$chave = "'.$titulo .'";
														

											?>
											<!DOCTYPE html>
											<html>
												<head>
													<meta charset="utf-8">
													<meta http-equiv="X-UA-Compatible" content="IE=edge">
													
													<meta name="robots" content="index, follow" />
													<meta name="description" content="'.$subtitulo.'"/>
													<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
													
													<title>Cia da informática - '.$subtitulo.'</title>
													<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon"/>

													<!-- bibliotecas css do bootstrap-->
													<link rel="stylesheet" href="css/bootstrap.css" />
													
													
													<link rel="stylesheet" href="css/estilo.css" />

													<!-- bibliotecas javascript do bootstrap-->
													
													<script text="text/javascript" src="js/jquery-2.2.4.min.js"></script>
													<script type="text/javascript" src="js/bootstrap.js"></script>
													<script type="text/javascript" src="js/script.js"></script>

											  <style>
											  .carousel-inner > .item > img,
											  .carousel-inner > .item > a > img {
												  width: 70%;
												  height: 300px;
												  margin: auto;
											  }
											  </style>

													<script>
													(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
													(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
													m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
													 })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

													ga(\'create\', \'UA-69560455-1\', \'auto\');
													 
													ga(\'send\', \'pageview\');

													</script>

													<!--pluguin do facebook-->
													<div id="fb-root"></div>
													<script>(function(d, s, id) {
													  var js, fjs = d.getElementsByTagName(s)[0];
													  if (d.getElementById(id)) return;
													  js = d.createElement(s); js.id = id;
													  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
													  fjs.parentNode.insertBefore(js, fjs);
													}(document, \'script\', \'facebook-jssdk\'));</script>
													<!--pluguin do facebook-->

													<script>
													(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
													(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
													m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
													})(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

													ga(\'create\', \'UA-69560455-1\', \'auto\');
													ga(\'send\', \'pageview\');

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
																	<li ><a href="../index.php">Home</a></li>
																	<li><a href="../contato.php">Contato</a></li>
																	<li><a href="../aplicativos.php">Aplicativos</a></li>
																	<li class="active"><a href="index.php">Blog</a></li> 
																</ul>
															
																	<?php
																			session_start();

																			if($_SESSION["login"] == "sucesso"){
																				
																				echo \'
																					<ul class="nav navbar-nav navbar-right">
																							
																							<li type="button" >
																								<a id="btSair" href="#">
																									<span class="glyphicon glyphicon-log-out"></span>Sair
																								</a>
																							</li>
																					</ul>
																					\';
																			}else{
																				echo \' 
																					<ul class="nav navbar-nav navbar-right">
																						
																						<li type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																							<a href="#">
																								<span class="glyphicon glyphicon-log-in"></span> Entrar<span class="caret"></span>
																							</a>
																						</li>
																							<div class="dropdown-menu col-md-8" aria-labelledby="dropdownMenu1">
																								
																									<div class="form-group">
																										<label for="campoEmail">Email</label>
																										<input id="campoEmail" type="email" class="form-control" placeholder="Email">
																									</div>
																									
																									<div class="form-group">
																										<label for="campoSenha">Senha</label>
																										<input type="password" class="form-control" id="campoSenha"  placeholder="Senha">
																									</div>
																									
																									
																									<button href="#" class="btn btn-default" id="btEntrar">Entrar</button>
																								
																								<br />
																								<br />
																								<label for="verificaEmail">ainda não é registrado?</label>
																								<br />
																								<a href="registro.php"><button type="button" class="btn btn-danger btn-lg btn-block">REGISTRE-SE</button></a>
																							</div>
																					</ul>
																				\';
																			}
																		?>
												  				</div>
												  			</div>
														</nav>

													<div class="container">
														<br>
														<div id="myCarousel" class="carousel slide" data-ride="carousel">
															<!-- Indicators -->
															<ol class="carousel-indicators">
																<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
																<li data-target="#myCarousel" data-slide-to="1"></li>
																<li data-target="#myCarousel" data-slide-to="2"></li>
																<li data-target="#myCarousel" data-slide-to="3"></li>
															</ol>

															<!-- Wrapper for slides -->
															<div class="carousel-inner" role="listbox">
																<div class="item active">
																	<img src="imagens/banner01.png" alt="Chania" width="460" height="345">
																	<div class="carousel-caption">
																		<h3></h3>
																		<p></p>
																	</div>
																</div>

																<div class="item">
																	<img src="imagens/banner02.png" alt="Chania" width="460" height="345">
																</div>
												
																<div class="item">
																	<img src="imagens/banner03.png" alt="Flower" width="460" height="345">
																</div>

																<div class="item">
																	<img src="imagens/banner04.png" alt="Flower" width="460" height="345">
																</div>
															</div>

																<!-- Left and right controls -->
																<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
																	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
																	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
														</div>
													</div>
													
													<!-- trilha de migalhas -->
													<ol class="breadcrumb">
														<li ><a href="../index.php">Home</a></li>
														<li><a href="../contato.php">Contato</a></li>
														<li><a href="../aplicativos.php">Aplicativos</a></li> 
														<li class="active">Blog</li> 
													</ol>

											<!-- comercial -->
											<div class="container">
												<div class="row">
													<section  >
														<div>
																<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
																<!-- responsivo -->
																<ins class="adsbygoogle"
																	 style="display:block"
																	 data-ad-client="ca-pub-6852613369528290"
																	 data-ad-slot="6631809163"
																	 data-ad-format="auto"></ins>
																<script>
																(adsbygoogle = window.adsbygoogle || []).push({});
																</script>
														</div>
													</section>
												</div>
											</div>

													<!-- section principal -->
													<div class="container-fluid">
														<div class="row-fluid">
															<div class="col-md-8">
																<section >
											<?php
															
														$video = "";
														$id = "";

														
														// Conexão com o Banco de Dados
														include "conexao.php";

														//query SQL
														$strSQL = "SELECT * FROM blog WHERE titulo = \'".$chave."\'";

														// Executa a query (o recordset $rs contém o resultado da query)
														$rs = mysqli_query($conexao, $strSQL);
														
														
														
														$x = 1;
												
														while( $row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
														
															$video = $row[\'video\'];
															$id = $row[\'id\'];
															
															//inserir titulo
															echo \'<h2 style="text-align:center;">\'.$row[\'subtitulo\']."</h2><br />";
															
																		// inserir foto e texto
															echo \'<div style="margin:0 auto; width:65%; "><img src="imagensp/\'.$row[\'foto\'].\'" style="width:100%;" /></div>\';
															
															echo $row[\'texto\'];
																																										echo\'<blockquote>
															<p>'.$subtitulo.'.</p>
															<footer>\'.$row[\'autor\'].\' \'.$row[\'data\'].\' <cite title="Source Title">Ipatinga-MG</cite></footer>
														</blockquote>\';
															
														$x++;
														}
														


														echo $video;

											?>

																	<div class="panel panel-primary">
																		<div class="panel-heading">
																			<h3 class="panel-title">COMENTÁRIOS</h3>
																		</div>
																			<div class="panel-body">
											   
											  
																		<?php
																			echo \'<div class="fb-comments" data-href="http://ciadainformatica.com/blog/'.$titulo.'.php" data-numposts="4" data-width="100%" data-colorscheme="light"></div>\';
																		?>
																		</div>
																	</div>

																</section>
															</div>
															
															
															<div class="col-md-4">
																<aside>
															
											<?php		

														
														$inicio = $id -2;
														$fim = 4;
														//query SQL
														
														$strSQL = "SELECT * FROM blog Order BY id Limit ".$inicio.", ".$fim."";

														// Executa a query (o recordset $rs contém o resultado da query)
														$rs = mysqli_query($conexao,$strSQL);
														
														
														$x = 1;
														
														echo $row[\'titulo\'];
														while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
															$imagem = $row[\'foto\'];
															$titulo = $row[\'titulo\'];
															$subtitulo = $row[\'subtitulo\'];
															echo\'<a href="\'.$titulo.\'.php">
																	<div class="panel panel-default" >
																		<div class="panel-body">
																			<img src="imagensp/\'.$imagem.\'" style=" width:100%;"  />
																		</div>
																		<div class="panel-footer">
																			<p>\'.$subtitulo.\'</p>
																		</div>
																	</div>
																</a>\';
														$x++;
														}
														mysqli_close($conexao);
											?>
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
																		<div class="fb-like" data-href="http://ciadainformatica.com/blog/'.$titulo .'.php" style="float:right;  z-index:5; "></div>
																	<br/><br/><br/>											
																	<script src="https://apis.google.com/js/platform.js">
																	</script>
																	<div class="g-ytsubscribe" data-channelid="UCraSA7CL-s7Vietf4t92i4g" data-layout="default" data-count="default"></div>
																	<br/>
																	</div>
																</footer>
															</div>
														</div>
													</div>

												</body>
											</html>';
											
											
								$titulo_imagem = $titulo.".jpg";//da nome a imagem baseando-se no titulo
								//caminho e nome onde o arquivo será salvo
								$caminho_enome = "imagensp/".$titulo.".jpg";
								
								//cria data
								$data = date("Y-m-d");
								
								//inserir dados no BD
								$strSQLB = "INSERT INTO blog(titulo,subtitulo,texto,foto,autor,data,video) VALUES('".$titulo."','".$subtitulo."','".$texto."','".$titulo_imagem."','".$autor."','".$data."','".$video."')";
								$resultado = mysqli_query($conexao,$strSQLB);
								mysqli_close($conexao);


								
								
								// cria ou abre arquivo de texto
								$nome_arquivo = $titulo.".php";
								$f = fopen($nome_arquivo, "w");
								// Escreve no arquivo de texto
								fwrite($f, $modelo); 
								// Fecha o arquivo de texto
								fclose($f);
								
								
								//-----------------------------------tratamento da imagem
									$endereco_imagem =  $_FILES["foto"]['tmp_name'];
									//copia imagem para o servidor, do cliente para servidor
									Copy($endereco_imagem,$caminho_enome); 
									
											
										// Carregar imagem já existente no servidor
										$imagem = imagecreatefromjpeg($caminho_enome);
										
										//redimensionar imagem já salva no servidor
										$largura_antiga = imagesx($imagem);
										$altura_antiga = imagesy($imagem);
										
										$largura_nova = 350;
										$altura_nova = 250;
										
										//cria nova imagem
										$nova_imagem = imagecreatetruecolor( $largura_nova, $altura_nova );
										//pega antiga imagem cola na nova e deixa redimensionado
										imagecopyresampled($nova_imagem,$imagem, 0, 0, 0, 0, $largura_nova, $altura_nova, $largura_antiga, $altura_antiga );
										
										//salva nova imagem substituindo a velha, e destroi as imagens temporarias...
										imagejpeg($nova_imagem, $caminho_enome);
										imagedestroy($imagem);
										imagedestroy($nova_imagem);
										//------------------------------------------ fim de tratamento da imegm
										
										
										$url = 'http://ciadainformatica.com/blog/'.$nome_arquivo;
										header("Location: $url");
															
											
								
								
							}else{
									echo "<script>alert('ERRO: Titulo já existe!')</script>";
							}	
						}else{
						echo "<script>alert('ERRO: você precisa inserir um texto!')</script>";
						}
					}else{
						echo "<script>alert('ERRO: você precisa inserir um autor para a página e incorporar um vídeo!')</script>";	
					}
				}else{
					echo "<script>alert('ERRO: você precisa enviar titulo e subtitulo!')</script>";	
				}
			
			}else{
				echo "<script>alert('ERRO: O arquivo deve ser uma imagem de formato jpg')</script>";	
			}
		}	

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Administração</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon"/>

		<!-- bibliotecas css do bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.css" />
		
		
		<link rel="stylesheet" href="css/estilo.css" />

		<!-- bibliotecas javascript do bootstrap-->
		
		<script text="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		
		
		<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="tinymce/jquery.tinymce.min.js"></script>
		<script>
				tinymce.init({
				  selector: 'textarea',
				  height: 500,
				  plugins: [
					'advlist autolink lists link image charmap print preview anchor',
					'searchreplace visualblocks code fullscreen',
					'insertdatetime media table contextmenu paste code'
				  ],
				  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ',
				  content_css: [
					'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
					'//tinymce/codepen.min.css'
				  ]
				});
		</script>

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
						<li ><a href="../index.php">Home</a></li>
						<li><a href="../contato.php">Contato</a></li>
						<li><a href="../aplicativos.php">Aplicativos</a></li>
      					<li class="active"><a href="#">Blog</a></li> 
    				</ul>
    			
    				<ul class="nav navbar-nav navbar-right">
      					<li><p><span class="glyphicon glyphicon-user"></span>Bem vindo <?php echo $_SESSION["nome"]; ?>!</p></li>
    				</ul>
  				</div>
  			</div>
		</nav>

		
		<!-- trilha de migalhas -->
		<ol class="breadcrumb">
     		<li ><a href="../index.php">Home</a></li>
			<li><a href="../contato.php">Contato</a></li>
      		<li><a href="../aplicativos.php">Aplicativos</a></li> 
      		<li class="active">Blog</li> 
		</ol>



		<!-- section principal -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-8">
					<section >
					
					
						<form enctype="multipart/form-data" method="POST"  action="?acao=criar" >
							<fieldset>
							<legend><span class="glyphicon glyphicon-plus"></span>Criação de páginas</legend>
							
								<div class="form-group">
									<label>autor</label>	
									<span class="glyphicon glyphicon-user"></span>
									<input maxlength="200" type="text" class="form-control" placeholder="Autor" name="autor" />
								</div>

								
							
								<div class="form-group">
									<label >Titulo</label>
									<span class="glyphicon glyphicon-text-width"></span>
									<input maxlength="40" type="text" class="form-control"  placeholder="Titulo" name="titulo" />
								</div>

						
							<div class="form-group">
								<label>Subtitulo</label>
								<span class="glyphicon glyphicon-text-width"></span>
								<input maxlength="80" type="text" class="form-control" placeholder="Subtitulo" name="subtitulo"  />
							</div>
							
							<div class="form-group">
								<label>Código de incorporação para vídeo</label>
								<span class="glyphicon glyphicon-film"></span>
								<input maxlength="200"type="text" class="form-control" placeholder="Vídeo (420X315)" name="video"  />
							</div>

							<div class="form-group">
								<label>Foto</label>
								<span class="glyphicon glyphicon-picture"></span>
								<input type="file" name="foto" class="form-control" placeholder="Foto"  />
							</div>
							
								<div class="form-group">
									<label>texto</label>
									<span class="glyphicon glyphicon-pencil"></span>
									<textarea maxlength="2500" class="form-control" rows="10"  name="texto"></textarea>
								</div>
								
							<button type="submit" class="btn btn-default">Criar</button>
						</fieldset>
					</form>

					</section>
				</div>
				
				
				<div class="col-md-4">
					<aside>

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
							<h5 >Desenvolvedores</h5>
						</div>
					</footer>
				</div>
			</div>
		</div>

	</body>
</html>