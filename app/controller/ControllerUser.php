<?php
require_once("../config/config.php");

require_once("../lib/autoload.php");




class ControllerUser extends Rotas
{
	
	function __construct()
	{	
		$conexao = new Conexao();
	
			if (isset($_FILES['arquivos'])) {
				
				$nome_arquivo = $_FILES['arquivos']['name'];
				$id_user =$_SESSION['id_usuario'];
// =================== verificação se existe a pasta do usuario ==============================================
				if (is_dir(SITE_USER."/".$id_user."/perfil")) {
					
				}else{
					mkdir(SITE_USER."/".$id_user."/perfil", 0777, true);
				}
// =================== movendo foto para a pasta do usuario     ==============================================
				
				move_uploaded_file($_FILES['arquivos']['tmp_name'],SITE_USER."/".$id_user."/perfil/".$id_user.'.jpg' );
				
				
				$value = 'user_img='.$id_user ;
				$id = 'id_pessoa='.$id_user;
				
				$conexao->updateDB('pessoas', $value ,$id, null );



			}
			

	}

	
}
