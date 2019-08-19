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
	 		$this->assign('GET_PUBLIC', $rotas->get_Public());
			$this->assign('PAGE_HOME', $rotas->page_Home());
			$this->assign('PAGE_CONTATO', $rotas->page_Contato());
			$this->assign('PAGE_AMBIENTE', $rotas->page_Ambiente());
			$this->assign('PAGE_CARDAPIO', $rotas->page_Cardapio());
			$this->assign('PAGE_CADASTRO', $rotas->page_Cadastro());
			$this->assign('GET_JS', $rotas->get_Js());
			$this->assign('GET_CSS', $rotas->get_Css());
			$this->assign('SESSAO', $this->sessaoAtiva());
			$this->assign('ID_USER', $this->idUser());
			$this->assign('USER_NOME', $this->nomeUser());
			$this->assign('CLI_NOME', $this->cliNome());
			$this->assign('CLI_SOBRENOME', $this->cliSobrenome());
			$this->assign('USER_IMG', $this->userImg());
			$this->assign('SITE_USER', $this->siteUser());
			$this->assign('PRO', $cardapio->GetItens());
						

	 	}

	 	function sessaoAtiva(){
	 		
	 		if (isset( $_SESSION['id_usuario'] )){

	 			return true;
	 		}
	 	}
	 	function idUser(){
	 		if (isset($_SESSION['id_usuario'])) {
	 			return $_SESSION['id_usuario'];
	 		}
	 	}
	 	function nomeUser(){
	 		if (isset($_SESSION['nome_usuario'])) {
	 			return $_SESSION['nome_usuario'];
	 		}
	 	}
	 	
	 	function cliNome(){
	 		if (isset($_SESSION['cli_nome'])) {
	 			return $_SESSION['cli_nome'];
	 		}
	 	}
	 	function cliSobrenome(){
	 		if (isset($_SESSION['cli_sobrenome'])) {
	 			return $_SESSION['cli_sobrenome'];
	 		}
	 	}
	 	function userImg(){
	 		if (isset($_SESSION['user_img'])) {
	 			if (file_exists(SITE_USER."/".$_SESSION['id_usuario']."/perfil/".$_SESSION['user_img'].'.jpg')) {
	 				return $_SESSION['user_img'].'.jpg';
	 			}else if (file_exists(SITE_USER."/".$_SESSION['id_usuario']."/perfil/".$_SESSION['user_img'].'.png')) {
	 				return $_SESSION['user_img'].'.png';
	 			}
	 			
	 		}
	 	}
	 	function siteUser(){
	 		return SERVER_USER;
	 	}
	 	

}






 ?>