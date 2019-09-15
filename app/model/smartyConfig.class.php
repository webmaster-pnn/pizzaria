<?php 

require_once("../lib/autoload.php");
require_once("../config/config.php");

class SmartyConfig extends Smarty{
	 	
	 	function __construct(){

	 		parent:: __construct();

	 	$this->setTemplateDir('../app/view/');
	 	$this->setCompileDir('../app/view/compile');
	 	$this->setCacheDir('../app/view/cache');
	 	
	 	}

	 	function rotasConfig(){
	 		
	 		$rotas = new Rotas();
			 $cardapio = new Cardapio();
			 $cardapio->getProdutos();
			 $cardapio->getTamanho();
			 $cardapio->getCategoria();
			 $this->assign('PRO', $cardapio->GetItens());
			 $this->assign('TAM', $cardapio->returnTamanho());
			 $this->assign('CAT', $cardapio->returnCategoria());


	 		$this->assign('GET_PUBLIC', $rotas->get_Public());
			$this->assign('PAGE_HOME', $rotas->page_Home());
			$this->assign('PAGE_CONTATO', $rotas->page_Contato());
			$this->assign('PAGE_AMBIENTE', $rotas->page_Ambiente());
			$this->assign('PAGE_CARDAPIO', $rotas->page_Cardapio());
			$this->assign('PAGE_CADASTRO', $rotas->page_Cadastro());
			$this->assign('GET_JS', $rotas->get_Js());
			$this->assign('GET_CSS', $rotas->get_Css());
			$this->assign('SESSAO', $this->sessaoAtiva());

			$this->assign('ID_USER', $this->userId());					//ID DO USUARIO
			$this->assign('USER_EMAIL', $this->userEmail());			//EMAIL DO USUARIO
			$this->assign('USER_NOME', $this->userNome());				//NOME DO USUARIO
			$this->assign('USER_SOBRENOME', $this->userSobrenome()); 	//SOBRENOME DO USUARIO
			$this->assign('USER_IMG', $this->userImg());				//IMAGEM DO USUARIO


			$this->assign('SITE_USER', $this->siteUser());    		 	 //PASTA DOS USUARIOS
			
						

	 	}

	 	function sessaoAtiva(){
	 		
	 		if (isset( $_SESSION['id_usuario'] )){

	 			return true;
	 		}
	 	}
	 	function userId(){
	 		if (isset($_SESSION['id_usuario'])) {
	 			return $_SESSION['id_usuario'];
	 		}
	 	}
	 	function userEmail(){
	 		if (isset($_SESSION['email_usuario'])) {
	 			return $_SESSION['email_usuario'];
	 		}
	 	}
	 	
	 	function userNome(){
	 		if (isset($_SESSION['nome_usuario'])) {
	 			return $_SESSION['nome_usuario'];
	 		}
	 	}
	 	function userSobrenome(){
	 		if (isset($_SESSION['sobrenome_usuario'])) {
	 			return $_SESSION['sobrenome_usuario'];
	 		}
	 	}
	 	function userImg(){
	 		if (isset($_SESSION['img_usuario'])) {
	 			if (file_exists(SITE_USER."/".$_SESSION['id_usuario']."/perfil/".$_SESSION['img_usuario'].'.jpg')) {
	 				return $_SESSION['img_usuario'].'.jpg';
	 			}else if (file_exists(SITE_USER."/".$_SESSION['id_usuario']."/perfil/".$_SESSION['img_usuario'].'.png')) {
	 				return $_SESSION['img_usuario'].'.png';
	 			}
	 			
	 		}
	 	}
	 	function siteUser(){
	 		return SERVER_USER;
	 	}
	 	

}






 ?>