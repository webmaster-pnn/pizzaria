<?php 

require_once("../lib/autoload.php");
require_once("../config/config.php");
require_once("../app/model/SmartyConfig.class.php");

class Controller404{
    public function __construct(){
      
    $smarty = new SmartyConfig();

   	$smarty->display('../app/view/404.tpl');
        
    }
}