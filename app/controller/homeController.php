<?php 

require_once("../lib/autoload.php");
if(session_status()!=PHP_SESSION_ACTIVE){ 
				session_start();
				
			}

/**
 * 
 */
class HomeController 
{
	
	function __construct()
	{
		$conectar = new Login();
		echo 'oi';
	}
}



 ?>