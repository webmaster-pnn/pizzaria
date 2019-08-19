<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
  session_start();
}
require_once("../lib/autoload.php");
require_once("../config/config.php");
require_once(SITE_MODEL."/SmartyConfig.class.php");
require_once(SITE_DISPATCH);
$smarty = new SmartyConfig();
$rotas = new Rotas();
$smarty->rotasConfig();






$Dispatch = new Dispatch();
$smarty->display('../app/view/header.tpl');


$rotas->template();


$smarty->display('../app/view/footer.tpl');








 ?>