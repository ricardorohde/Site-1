<?php
	class Pesquisa{
		 public $autor;
		 public $titulo;
		 public $subtitulo;
		 public $foto;
		
		
		
		//seter
		function setPesquisa($autor,$titulo,$subtitulo,$foto){
			$this->autor = $autor;
			$this->titulo = $titulo;
			$this->subtitulo = $subtitulo;
			$this->foto = $foto;
		}
			
		//geters
		function getAutor(){
			return $this->autor;
		}
		function getTitulo(){
			return  $this->titulo;
			
		}
		function getSubtitulo(){
			return $this->subtitulo;
		}
		function getFoto(){
			return $this->foto;
		}

	}
?>