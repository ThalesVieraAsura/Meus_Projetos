<?php 

	class Galeria{
		private $imagens = array('img1.png', 'img2.jpg', 'img3.png');

		public function getCurrentPicture(){
			$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : 0;
			if($atual < 0){
				$atual = 0;
			}
			if($atual >= count($this->imagens)){
				$atual = count($this->imagens) - 1;
			}
			return $this->imagens[$atual];
		}

		public function getPrevPictureIndex(){
			$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : 0;
			$atual--;
			if($atual < 0){
				$atual = 0;
			}
			return '?imagem='.$atual;
		}

		public function getNextPictureIndex(){
			$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : 0;
			$atual++;
			if($atual >= count($this->imagens)){
				$atual = count($this->imagens) -1;
			}
			return '?imagem='.$atual;
		}
	}
?>