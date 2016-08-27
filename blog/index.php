<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="description" content="*****"/>
		<meta name="robots" content="index, follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon"/>
		<title>****</title>

		<!-- bibliotecas css do bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.css" />
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
					<li class="active"><a href="index.php">blog</a></li> 
    				</ul>
    			
					<?php
							session_start();

							if($_SESSION["login"] == "sucesso"){
								
								echo '
									<ul class="nav navbar-nav navbar-right">
											
											<li type="button" >
												<a id="btSair" href="#">
													<span class="glyphicon glyphicon-log-out"></span>Sair
												</a>
											</li>
									</ul>
									';
							}else{
								echo ' 
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
													
													
													<button class="btn btn-default" id="btEntrar">Entrar</button>
												
												<br />
												<br />
												<label for="verificaEmail">ainda não é registrado?</label>
												<br />
												<a href="registro.php"><button type="button" class="btn btn-danger btn-lg btn-block">REGISTRE-SE</button></a>
											</div>
									</ul>
								';
							}
						?>
  				</div>
  			</div>
		</nav>

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
		
		<!-- trilha de migalhas -->
		<ol class="breadcrumb">
     		<li><a href="../index.php">Home</a></li>
			<li><a href="../contato.php">Contato</a></li>
      		<li><a href="../aplicativos.php">Aplicativos</a></li> 
      		<li class="active">blog</li>  
		</ol>
		<br />
<!-- comercial -->

	<div class="container-fluid">
		<div class="row-fluid">
			<section>
				<!-- ##################################### -->
			</section>
		</div>
	</div>

		<!-- buscador -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-8 form-inline">
					
						
						
							<input id="campoPesquisar" type="text" class="form-control" placeholder="Procurar"  />
	
							<button id="btPesquisar" class="btn btn-default" data-toggle="dropdown" aria-expanded="true"  aria-haspopup="true">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>

						<div class="dropdown-menu col-md-8 " id="caixaDeResultadoDaPesquisa" aria-labelledby="btPesquisar">
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
			include "conexao.php";


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
			$strSQL = "SELECT * FROM blog Order BY id DESC Limit ".$inicio.", 12";
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
						    <li style="cursor:pointer;" id="voltar">
								<a aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
<?php
						$num = $num/12;
						$pagina = 1;
						
						
						
					echo'
						<script>
							$(document).ready(function(){
		
							  $("#avancar").click(function(){
								  
									var limite = Math.ceil('.$num.');
							
									var auxlim = parseInt($("#5").text());
							
									if('.$num.' > 5 && auxlim < '.$num.'){
										var aux1 = parseInt($("#1").text()) + 1 ;
										var aux2 = parseInt($("#2").text()) + 1 ;
										var aux3 = parseInt($("#3").text()) + 1 ;
										var aux4 = parseInt($("#4").text()) + 1 ;
										var aux5 = parseInt($("#5").text()) + 1 ;
										
									
										$("#1").empty();
										$("#1").append(aux1);

										$("#2").empty();
										$("#2").append(aux2);
										
										$("#3").empty();
										$("#3").append(aux3);
										
										$("#4").empty();
										$("#4").append(aux4);
										
										$("#5").empty();
										$("#5").append(aux5);
										
										
										$("#1").attr("href", "?pagina="+aux1);
										$("#2").attr("href", "?pagina="+aux2);
										$("#3").attr("href", "?pagina="+aux3);
										$("#4").attr("href", "?pagina="+aux4);
										$("#5").attr("href", "?pagina="+aux5);
									}


										$("#item1").removeClass("active");
										if('.$_GET["pagina"].' == parseInt($("#1").text())){
											$("#item1").addClass("active");
										}										
										
										$("#item2").removeClass("active");
										if('.$_GET["pagina"].' == parseInt($("#2").text())){
											$("#item2").addClass("active");
										}										
										
										$("#item3").removeClass("active");
										if('.$_GET["pagina"].' == parseInt($("#3").text())){
											$("#item3").addClass("active");
										}										
										
										$("#item4").removeClass("active");
										if('.$_GET["pagina"].' == parseInt($("#4").text())){
											$("#item4").addClass("active");
										}										
										
										$("#item5").removeClass("active");
										if('.$_GET["pagina"].' == parseInt($("#5").text())){
											$("#item5").addClass("active");
										}
									})
									
									
									
								$("#voltar").click(function(){
								  
									var limite = Math.ceil('.$num.');
							
								
									var aux1 = parseInt($("#1").text());
									if(aux1 > 1){
										var aux1 = parseInt($("#1").text()) - 1;
										var aux2 = parseInt($("#2").text()) - 1 ;
										var aux3 = parseInt($("#3").text()) - 1 ;
										var aux4 = parseInt($("#4").text()) - 1 ;
										var aux5 = parseInt($("#5").text()) - 1 ;
										
									
										$("#1").empty();
										$("#1").append(aux1);

										$("#2").empty();
										$("#2").append(aux2);
										
										$("#3").empty();
										$("#3").append(aux3);
										
										$("#4").empty();
										$("#4").append(aux4);
										
										$("#5").empty();
										$("#5").append(aux5);
										
										
										$("#1").attr("href", "?pagina="+aux1);
										$("#2").attr("href", "?pagina="+aux2);
										$("#3").attr("href", "?pagina="+aux3);
										$("#4").attr("href", "?pagina="+aux4);
										$("#5").attr("href", "?pagina="+aux5);
										
										
										$("#item1").removeClass("active");
										if('.$_GET["pagina"].' == aux1){
											$("#item1").addClass("active");
										}										
										
										$("#item2").removeClass("active");
										if('.$_GET["pagina"].' == aux2){
											$("#item2").addClass("active");
										}										
										
										$("#item3").removeClass("active");
										if('.$_GET["pagina"].' == aux3){
											$("#item3").addClass("active");
										}										
										
										$("#item4").removeClass("active");
										if('.$_GET["pagina"].' == aux4){
											$("#item4").addClass("active");
										}										
										
										$("#item5").removeClass("active");
										if('.$_GET["pagina"].' == aux5){
											$("#item5").addClass("active");
										}
											
											
											
											
										
									}
										
								
								  

									})
									
									
									
									
								});
							
							
							 
						</script>
						';
						
						
						
						
						
						
						if(isset($_GET['pagina'])){
							if($_GET['pagina'] > 5){
								$pagina = $_GET['pagina'] - 4;
								
							}
						}
								

						
					
					

							$cont = 1;
					
							do{
								if (isset($_GET['pagina'])) {
									if($_GET['pagina'] > 0){
										if($_GET['pagina'] == $pagina){
											echo '<li id="item'.$cont.'" class="active"><a href="?pagina='.$pagina.'" id="'.$cont.'" >'.$pagina.'</a></li>';
										}else{
											echo '<li id="item'.$cont.'"><a  href="?pagina='.$pagina.'" id="'.$cont.'" >'.$pagina.'</a></li>';
										}
									}else{
										if(1 == $pagina){
											echo '<li id="item'.$cont.'" class="active"><a href="?pagina='.$pagina.'" id="'.$cont.'">'.$pagina.'</a></li>';
										}else{
											echo '<li id="item'.$cont.'"><a  href="?pagina='.$pagina.'" id="'.$cont.'">'.$pagina.'</a></li>';
										}
									}
								}else{
									if(1 == $pagina){
										echo '<li id="item'.$cont.'" class="active"><a href="?pagina='.$pagina.'" id="'.$cont.'">'.$pagina.'</a></li>';
									}else{
										echo '<li id="item'.$cont.'"><a  href="?pagina='.$pagina.'" id="'.$cont.'">'.$pagina.'</a></li>';
									}
								}
								
								$cont++;
								$num--;
								$pagina++;

							}while($num > 0 );
							
						
												
?>
							    <li style="cursor:pointer;" id="avancar">
								  <a  aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								  </a>
								</li>

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

					</footer>
				</div>
			</div>
		</div>

	</body>
</html>