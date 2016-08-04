//############################### SLIDE #########################################
function capa1(){
			document.getElementById("img_slide").src="imagens/capa1.jpg";
			document.getElementById("itemLista_slide1").style="text-decoration: underline;color:#324a78;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			document.getElementById("itemLista_slide2").style="color:#152032;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			document.getElementById("itemLista_slide3").style="color:#152032;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			
				
}
function capa2(){
			document.getElementById("img_slide").src="imagens/capa2.jpg";
			document.getElementById("itemLista_slide1").style="color:#152032;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			document.getElementById("itemLista_slide2").style="text-decoration: underline;color:#324a78;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			document.getElementById("itemLista_slide3").style="color:#152032;font-size:35px;text-indent:6px;list-style:none;float:left; ";
}
function capa3(){
			document.getElementById("img_slide").src="imagens/capa3.jpg";
			document.getElementById("itemLista_slide1").style="color:#152032;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			document.getElementById("itemLista_slide2").style="color:#152032;font-size:35px;text-indent:6px;list-style:none;float:left; ";
			document.getElementById("itemLista_slide3").style="text-decoration: underline;color:#324a78;font-size:35px;text-indent:6px;list-style:none;float:left; ";
}
//############################### SLIDE #########################################

//############################### EMAIL #########################################
function enviar_email(){
	open("mensagem.php","Contato","scrollbars=no,top=150,left=150,width=360,height=410");
}

function fechar_popup(){
	close("mensagem.php");
}
//############################### EMAIL #########################################



//########################menu de navegação mudar imagem no passar do mouse #########################
			function mudaFoto(nomeFoto){
				
				document.getElementById("icone").src="../imagens/icones/"+nomeFoto;
				
			}
//########################menu de navegação mudar imagem no passar do mouse #########################