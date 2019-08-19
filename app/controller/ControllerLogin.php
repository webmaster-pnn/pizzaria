<?php 

require_once("../lib/autoload.php");




class ControllerLogin extends Login
{
	
	
		function __construct()
	{	
		self::Conect();
		if (self::Conect() == true) {
			header("location: user");
		}

		$smarty = new smarty();
		$conectar = new Cadastro();
		
		
		
		

	}
	
	
}