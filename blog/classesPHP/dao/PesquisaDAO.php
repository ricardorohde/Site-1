<?php

	require_once '../model/Pesquisa.php';

	class PesquisaDAO extends Pesquisa{
		
		

		
		function buscaPesquisa($pesquisa){
			 $cont = 0;
			 $vetor= array();
			
		// Conecta ao banco de dados
		$mysqli = new mysqli( "seu host", "usuario", "senha", "banco de dados");
		// Verifica se ocorreu algum erro
		if (mysqli_connect_errno()) {
			die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
			exit();
		}	
			$pesquisa = "%".$pesquisa."%";
			
			//sql select * from sua_tabela where lower(campo) like '%anatomia%codigo%'
			if($sql = $mysqli->prepare("SELECT autor,titulo,subtitulo,foto FROM blog WHERE texto LIKE  ?  LIMIT 6")){
				
				 $sql->bind_param("s", $pesquisa);
				 $sql->execute();
				 
				 sleep(2);
				
			
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