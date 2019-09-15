<?php 
require_once("../config/config.php");
require_once("../src/traits/UrlParse.trait.php");

class Rotas{
    use UrlParse;

    private $Rota;

    #metodo de retorno da rota 
    public function getRota(){
        $Url = $this->parseUrl();
        $i = $Url[0];

        $this->Rota=array(
            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "cardapio"=>"ControllerCardapio",
            "ambiente" => "ControllerAmbiente",
            "contato" => "ControllerContato",
            "cadastro"=> "ControllerCadastro",
            "user"=> "ControllerUser",
            "login"=> "ControllerLogin",
            "logout" => "ControllerLogout"

        );
        if(array_key_exists($i,$this->Rota)){
        
                if (file_exists(SITE_CONTROLLER."/{$this->Rota[$i]}.php")){
                    return $this->Rota[$i];

                }else{
                    return "ControllerConstrucao";
                }

        } else {
            return "ControllerErroPag";
        }

    }
    public function template(){
        $smarty = new SmartyConfig();
        $smarty->rotasConfig();
        if (isset($_SESSION['permissao_usuario'] )) {
           if ($_SESSION['permissao_usuario'] == "administrador") {
                switch($_GET['url']){ 
            case 'ambiente': 
            return $smarty->display('../app/view/admin/ambiente.tpl'); 
            break;
            case 'cardapio';
            return $smarty->display('../app/view/admin/cardapio.tpl'); 
            break;
            case 'contato';
            return $smarty->display('../app/view/admin/contato.tpl'); 
            break;
             case 'cadastro';
            return $smarty->display('../app/view/admin/cadastro.tpl'); 
            break;
            case 'user';
            return $smarty->display('../app/view/admin/user.tpl'); 
            break;
            case 'login';
            return $smarty->display('../app/view/admin/login.tpl'); 
            break;
            default: 
            return $smarty->display('../app/view/admin/home.tpl'); 
            }
           }else{
            switch($_GET['url']){ 
            case 'ambiente': 
            return $smarty->display('../app/view/ambiente.tpl'); 
            break;
            case 'cardapio';
            return $smarty->display('../app/view/cardapio.tpl'); 
            break;
            case 'contato';
            return $smarty->display('../app/view/contato.tpl'); 
            break;
             case 'cadastro';
            return $smarty->display('../app/view/cadastro.tpl'); 
            break;
            case 'user';
            return $smarty->display('../app/view/user.tpl'); 
            break;
            case 'login';
            return $smarty->display('../app/view/login.tpl'); 
            break;
            default: 
            return $smarty->display('../app/view/home.tpl'); 
            }
           }
        }else{
         switch($_GET['url']){ 
            case 'ambiente': 
            return $smarty->display('../app/view/ambiente.tpl'); 
            break;
            case 'cardapio';
            return $smarty->display('../app/view/cardapio.tpl'); 
            break;
            case 'contato';
            return $smarty->display('../app/view/contato.tpl'); 
            break;
             case 'cadastro';
            return $smarty->display('../app/view/cadastro.tpl'); 
            break;
            case 'user';
            return $smarty->display('../app/view/user.tpl'); 
            break;
            case 'login';
            return $smarty->display('../app/view/login.tpl'); 
            break;
            default: 
            return $smarty->display('../app/view/home.tpl'); 
            }
        }
    }

       public function get_Public(){
            return SERVER_PUBLIC;
        }
       public function page_Home(){
        return SERVER_RAIZ.'home';
       }
       public function page_Ambiente(){
        return SERVER_RAIZ.'ambiente';
       }
       public function page_Contato(){
        return SERVER_RAIZ.'contato';
       }
       public function page_Cardapio(){
        return SERVER_RAIZ.'cardapio';
       }
          public function page_Cadastro(){
        return SERVER_RAIZ.'cadastro';
       }

        public function get_Css(){


            switch($_GET['url']){ 
            case 'ambiente': 
            return 'ambiente'; 
            break;
            case 'cardapio';
            return 'cardapio3';
            break;
            case 'contato';
            return 'contato';
             case 'cadastro';
            return 'cadastro';
            case 'user';
            return 'user';
            case 'login';
            return 'login';
            default: 
            return 'home'; 
            }
        }
         public function get_Js(){


            switch($_GET['url']){ 
            case 'ambiente': 
            return 'ambiente'; 
            break;
            case 'cardapio';
            return 'cardapio';
            break;
            case 'contato';
            return 'contato';
             case 'cadastro';
            return 'cadastro';
            case 'login';
            return 'login';
            case 'user';
            return 'user';
            default: 
            return 'home'; 
            }
        }

       //  function get_ImgUrl(){
       //      return  self::get_Public().'image/';
       //  }
       // function ImageLink($img, $largura, $altura){
       //      $imagem = self::getImgUrl() . "thumb.php?src={$img}&$w={$largura}&$h={$altura}&zc=1";
       //      return $imagem;
       // }
    

}







 ?>