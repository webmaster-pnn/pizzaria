<?php


class ControllerAmbiente extends Ambiente{

 function __construct(){
   	$smarty = new SmartyConfig();
	$smarty->assign('GET_PUBLIC', $this->get_Public());



   	
   }
}