<?php 

require_once("../lib/autoload.php");
require_once("../lib/autoload.php");


class ControllerHome extends Home {
   



   function __construct(){
   	$smarty = new SmartyConfig();
   	
   	 $smarty->assign('GET_PUBLIC', $this->get_Public());
   	 $smarty->assign('PAGE_CARDAPIO', $this->page_Cardapio());	 
     	
   }
	
	
 
}
