<?php
require_once("../lib/autoload.php");

class ControllerCardapio extends Rotas{

	function __construct(){

		$smarty = new SmartyConfig();
		$rotas = new Rotas();
		$cardapio = new Cardapio();
		$cardapio->GetProdutos();
		
		
		$smarty->assign('GET_PUBLIC', $rotas->get_Public());
		
	}

}