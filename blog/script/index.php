<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cia da informática - blog </title>
		<meta name="description" content="Cia da informática - Aplicativos"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon"/>

		<!-- bibliotecas css do bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		
		
		<link rel="stylesheet" href="css/estilo.css" />

		<!-- bibliotecas javascript do bootstrap-->
		
		<script text="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.elevatezoom.js"></script>
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
					<li><a href="../index.php">Home</a></li>
					<li><a href="../contato.php">Contato</a></li>
					<li><a href="../aplicativos.php">Aplicativos</a></li> 
					<li class="active"><a href="#">Blog</a></li> 
    				</ul>
    			
    				<ul class="nav navbar-nav navbar-right">
      					
      					<li type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<a href="#">
								<span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span>
							</a>
						</li>
							<div class="dropdown-menu col-md-6" aria-labelledby="dropdownMenu1">
								<form>
									<div class="form-group">
										<label for="verificaEmail">Email</label>
										<input type="email" class="form-control" id="verificaEmail" placeholder="Email">
									</div>
									
									<div class="form-group">
										<label for="verificaPassword">Senha</label>
										<input type="password" class="form-control" id="verificaPassword" placeholder="Senha">
									</div>
									
									<div class="checkbox">
										<label>
											<input type="checkbox" /> Permanecer logado
										</label>
									</div>
									
									<button type="submit" class="btn btn-default">Entrar</button>
								</form>
								<br />
								<br />
								<label for="verificaEmail">ainda não é registrado?</label>
								<br />
								<a href="../registro.php"><button type="button" class="btn btn-danger btn-lg btn-block">REGISTRE-SE</button></a>
							</div>

    				</ul>
  				</div>
  			</div>
		</nav>

		<div class="container">
  			<br />
			<div class="container-fluid">
					<div class="row-fluid">
						<div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel">
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
			</div>
		</div>
		
		<!-- trilha de migalhas -->
		<ol class="breadcrumb">
     		<li><a href="../index.php">Home</a></li>
			<li><a href="../contato.php">Contato</a></li>
      		<li><a href="../aplicativos.php">Aplicativos</a></li> 
      		<li class="active">Blog</li>  
		</ol>
		<br />
<!-- comercial -->
<div class="container">
	<div class="container-fluid">
		<div class="row-fluid">
			<section>
				<div style="display:block; padding:5px;">
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
</div>
		<!-- buscador -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-10">
					<div class="col-md-8">
						<div class="input-group"  >
						
							<input id="campoPesquisar" type="text" class="form-control" placeholder="Procurar">
	
						<span class="input-group-btn">
							<button id="btPesquisar" class="btn btn-default" data-toggle="dropdown" aria-expanded="true"  aria-haspopup="true">
							<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
						</span>
						
						<div class="dropdown-menu col-md-8 " id="caixaDeResultadoDaPesquisa" aria-labelledby="campoPesquisar">
						</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
					<br />			
					<br />	
		<!-- section principal -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-12">

<section>
	<?php
			// Conexão com o Banco de Dados
			include "../conexao.php";


			//VARIAVEL CARREGA CONSIGO NUMERO FINAL DE ID PARA BUSCA NO BD
			$fim = 12;

  				if (isset($_GET['pagina'])) {
					if($_GET['pagina'] > 0){
						$fim = $_GET['pagina'] * 12;
					}
				}
			


			//======= ESTE BLOCO SERVE PARA O SISTEMA DE PÁGINAÇÃO LÁ EM BAIXO QUE PRECISA SABER DO NUMERO DE ROWS
			$strSQL1 = "SELECT * FROM blog Order BY id DESC";
			$result = mysqli_query($conexao,$strSQL1);
			$num = mysqli_num_rows($result);
			//============================ FIM DO BLOCO




			//determina o id  inicial  para a busca
			$inicio = $fim-12;
			//query SQL
			$strSQL = "SELECT * FROM blog Order BY id DESC Limit ".$inicio.", ".$fim."";
			// Executa a query (o recordset $rs contém o resultado da query)
			$rs = mysqli_query($conexao,$strSQL);
			
			
			$x = 1;// variavel auxiliar
			echo $row['titulo'];
			while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
				$imagem = $row['foto'];
		    	$titulo = $row['titulo'];
				$subtitulo = $row['subtitulo'];
	     			echo'<a href="'.$titulo.'.php">
							<div class="panel panel-default col-md-4" >
								<div class="panel-body">
									<img src="imagensp/'.$imagem.'" style=" width:100%; height:150px;"  />
								</div>
								<div class="panel-footer" style=" height:75px;">
									<p>'.$subtitulo.'</p>
								</div>
							</div>
						</a>';
				$x++;
			}
			mysqli_close($conexao);
        ?>
</section>
				</div>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-12">
					<nav> 
					  	<ul  class= "pagination pagination-lg" > 
<?php
						$num = $num/12;
						$pagina = 1;
							do{
								if (isset($_GET['pagina'])) {
									if($_GET['pagina'] > 0){
										if($_GET['pagina'] == $pagina){
											echo '<li class="active"><a href= "?pagina='.$pagina.'" >'.$pagina.'</a></li>';
										}else{
											echo '<li><a  href= "?pagina='.$pagina.'" >'.$pagina.'</a></li>';
										}
									}else{
										if(1 == $pagina){
											echo '<li class="active"><a href= "?pagina='.$pagina.'" >'.$pagina.'</a></li>';
										}else{
											echo '<li><a  href= "?pagina='.$pagina.'" >'.$pagina.'</a></li>';
										}
									}
								}else{
									if(1 == $pagina){
										echo '<li class="active"><a href= "?pagina='.$pagina.'" >'.$pagina.'</a></li>';
									}else{
										echo '<li><a  href= "?pagina='.$pagina.'" >'.$pagina.'</a></li>';
									}
								}

								$num--;
								$pagina++;

							}while($num > 0);
?>
					  </ul> 
				</nav>
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
					</footer>
				</div>
			</div>
		</div>

	</body>
</html>