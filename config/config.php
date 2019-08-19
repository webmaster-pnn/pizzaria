<?php
#Arquivos diretorios raizes

$pastaInterna = "pizzaria/";

#CONSTANTE DA URL ABSOLUTA
define('SERVER_RAIZ',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");//http://localhost/pizzaria/
#CONSTANTE DO CAMINHO DAS REQUISIÇOES
if(substr($_SERVER['DOCUMENT_ROOT'],-1)== "/"){
    define('SITE_RAIZ',"{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}"); //C:/xampp/htdocs/pizzaria/
} else {
    define('SITE_RAIZ',"{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}
#CONSTANTES PARA CAMINHOS DE MUITO USO DO SERVIDOR

define('SERVER_IMG',SERVER_RAIZ."public/image");
define('SERVER_USER',SERVER_RAIZ."users");
define('SERVER_PUBLIC',SERVER_RAIZ."public/");
define('SERVER_CSS',SERVER_RAIZ."public/css");
define('SERVER_JS',SERVER_RAIZ."public/js");
define('SERVER_VIDEO',SERVER_RAIZ."public/video");
define( 'SERVER_VIEW', SERVER_RAIZ."app/view");
define( 'SERVER_CONTROLLER', SERVER_RAIZ."app/controller");
define( 'SERVER_MODEL', SERVER_RAIZ."app/model");
define( 'SERVER_CONFIG', SERVER_RAIZ."config/config.php");
define( 'SERVER_AUTOLOAD', SERVER_RAIZ."lib/autoload.php");
define( 'SERVER_DISPATCH', SERVER_RAIZ."app/Dispatch.php");




#CONSTANTES PARA CAMINHOS DE MUITO USO DA PASTA RAIZ

define('SITE_IMG',SITE_RAIZ."public/image");
define('SITE_USER',SITE_RAIZ."users");
define('SITE_CSS',SITE_RAIZ."public/css");
define('SITE_JS',SITE_RAIZ."public/js");
define('SITE_VIDEO',SITE_RAIZ."public/video");
define( 'SITE_VIEW', SITE_RAIZ."app/view");
define( 'SITE_CONTROLLER', SITE_RAIZ."app/controller");
define( 'SITE_MODEL', SITE_RAIZ."app/model");
define( 'SITE_CONFIG', SITE_RAIZ."config/config.php");
define( 'SITE_AUTOLOAD', SITE_RAIZ."lib/autoload.php");
define( 'SITE_DISPATCH', SITE_RAIZ."app/Dispatch.php");


#BANCO DE DADOS ACESSO
define('BD_HOST','localhost');
define('BD_BANCO','pizzaria');
define('BD_USER','root');
define('BD_PASS','');
define('BD_PREFIX','');


