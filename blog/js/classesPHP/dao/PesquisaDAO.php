<?php
header('Content-Type: text/html; charset=utf-8');
	require_once '../model/Pesquisa.php';

	class PesquisaDAO extends Pesquisa{
		
		

		
		function buscaPesquisa($pesquisa){
			 $cont;
			 $vetor= array();
			
		// Conecta ao banco de dados
		$mysqli = new mysqli( "mysql.hostinger.com.br", "u643428553_lipe", "laranja19", "u643428553_bd");
		// Verifica se ocorreu algum erro
		if (mysqli_connect_errno()) {
			die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
			exit();
		}	
			// select * from articles WHERE MATCH(title,body) AGAINST ('+database -tutorial' IN BOOLEAN MODE);
			//sql select * from sua_tabela where lower(campo) like '%anatomia%codigo%'
			if($sql = $mysqli->prepare("SELECT autor,titulo,subtitulo,foto FROM blog WHERE MATCH(texto) AGAINST ('teste de memoria'"))){

				 $sql->execute();
				 $sql->store_result();
				
			
				if($sql->bind_result($autor, $titulo, $subtitulo, $foto)){	 
					while ($sql->fetch()) {
						
						$vetor[$cont] = array($autor, $titulo, $subtitulo, $foto);
						$cont++;
					}
					
					 $sql->close();

				}

			}
			$mysqli->close();
			
		
			return $vetor;
		}
		
	}
	
	

?>