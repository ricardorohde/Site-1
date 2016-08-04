<?php
				// Conexão com o Banco de Dados
				$conexao = mysqli_connect("seu host", "nome de usuario", "senha") or die (mysqli_error ());

				// Seleciona o Banco de Dados
				mysqli_select_db($conexao, "seu banco") or die(mysqli_error());
				
				/* como o site utiliza php 5+, a sintaxe de conexão foi um pouco diferente por mudanças na linguagem... **/
?>