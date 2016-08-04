
$(document).ready(function(){
		


         $("#btPesquisar").click(function(){
			
		var pesquisa = document.getElementById("campoPesquisar").value;

		var endereco = "http://www.ciadainformatica.com/blog/classesPHP/control/PesquisaControle.php";
		$("#caixaDeResultadoDaPesquisa").empty();
		$("#caixaDeResultadoDaPesquisa").append("<div style='text-align:center;'><img src='imagens/loading.gif'/></div>");

			  
                $.ajax({
                    type: "POST",
                    url: endereco,
					 data: { pesquisa: pesquisa},
                    success: function(data){
						 $("#caixaDeResultadoDaPesquisa").empty();
						$("#caixaDeResultadoDaPesquisa").append(data);
						
						
                    }
                })
            });


		
        $("#btEntrar").click(function(){
			  
		var email = document.getElementById("campoEmail").value;
		var senha = document.getElementById("campoSenha").value;
		var endereco = "http://www.ciadainformatica.com/classesPHP/control/UsuarioControle.php?email="+email+"&senha="+senha;
			 
			  
                $.ajax({
                    type: "GET",
                    url: endereco,
                    success: function(xml){
                     $(xml).find('conteudo').each(function(){
						 login = $(this).find('login').text();
						 nome = $(this).find('nome').text();
						 email= $(this).find('email').text();
						 senha= $(this).find('senha').text();
						 telefone = $(this).find('telefone').text();
						 tipo = $(this).find('tipo').text();
						 data = $(this).find('data').text();
						 if(login == 'erro'){
							alert('ERRO: email ou senha incorretos!');
						 }
						location.reload(); // ação, atualização do documento
						
					 });
                    }
                })
            });
		
		$("#btSair").click(function(){			  
                $.ajax({
                    type: "GET",
                    url: "http://www.ciadainformatica.com/classesPHP/control/DestruirSessao.php",
                    success: function(){
						location.reload(); // ação, atualização do documento
                    }
                })
            });

});

