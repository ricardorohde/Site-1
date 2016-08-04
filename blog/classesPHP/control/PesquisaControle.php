<?php
		require_once '../dao/PesquisaDAO.php';
		//cria objeto usuario para manipular dados de usuario
		$pesquisa = new PesquisaDAO();
	
		

		//recebe email e senha via get para buscar usuario no bd
		$entradaDoUsuario = $_POST['pesquisa'];

		
		
		// metodo de usuario responsavel por fazer a pesquisa através de email e retorna um vetor com todos os atributos
		$vetor = $pesquisa->buscaPesquisa($entradaDoUsuario);
			
		$posicoes = count($vetor);

			
		for($i=0; $i < $posicoes; $i++ ){	
			echo '<p><a href="'.$vetor[$i][1].'.php">'.$vetor[$i][2].'<img height="50px" width="50px" class="img-circle" src="imagensp/'.$vetor[$i][3].'"/></a> </p><br /><hr />';
		}
		
?>