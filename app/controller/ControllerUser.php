<?php
require_once("../config/config.php");

require_once("../lib/autoload.php");




class ControllerUser extends Rotas
{
	
	function __construct()
	{	


		// troca de foto do perfil
		$conexao = new Conexao();
		$conexao->Authent($_SESSION['email_usuario'], $_SESSION['senha_usuario']);
	
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
				$id = 'pessoa_id='.$id_user;
				
				$conexao->updateDB('tb_usuarios', $value ,$id, null );
				header("location: user");

			



			}

			if(isset($_POST['nome'])){
				$id_user =$_SESSION['id_usuario'];
				$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
				$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
				$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

				$query = "UPDATE tb_pessoas set pes_nome = '$nome', pes_sobrenome = '$sobrenome', pes_email = '$email' where id_pessoa = $id_user "; 
				$conexao->ExecuteSql($query);
				header("location: user");
				

			}
			if(isset($_POST['cep'])){

				$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
				$end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_SPECIAL_CHARS);
				$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
				$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
				$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);

			}
			

	}

	
}
