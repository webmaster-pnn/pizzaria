<?php 
require_once("../lib/autoload.php");
/**
 * 
 */
class Cadastro
{
	
	function __construct(){
		$conexao = new Conexao();
		$tipo_user = "cliente";
		
		

		if(isset($_POST['txtName'])) {
					$_SESSION['cadastro'] = true;

		
		$nome = addslashes($_POST['txtName']);
		$sobrenome = addslashes($_POST['txtSobrenome']);
		$email = addslashes($_POST['txtEmail']);
		$senha = addslashes($_POST['senha']);
		$confirm_senha = addslashes($_POST['confirm_senha']);
		$sexo = addslashes($_POST['sexo']);
		$cpf = addslashes($_POST['cpf']);
		$nasc = addslashes($_POST['nasc']);
		
		

				
		$conexao->insertDB("tb_pessoas", "?,?,?,?,?,?,?",array('', $nome, $sobrenome, $nasc, $email, $sexo,  $cpf));
		
		$id1 = $conexao->recuperaId('id_pessoa', 'tb_pessoas');

		$conexao->insertDB("tb_usuarios", "?,?,?,?,?" , array('', md5($senha), 'Usuario', 'user', $id1 ));
		$conexao->Authent($email, md5($senha));


		if ($_SESSION['status'] == "online") {
			// ===================         criando a pasta do usuario      =============================================
				if (is_dir(SITE_USER."/".$_SESSION['id_usuario'])) {
					
				}else{
					mkdir(SITE_USER."/".$_SESSION['id_usuario'], 0777, true);
				}
// ===================   inserindo a imagem  de perfil         =============================================
				if (is_dir(SITE_USER."/".$_SESSION['id_usuario']."/perfil")) {
					
				}else{
					mkdir(SITE_USER."/".$_SESSION['id_usuario']."/perfil", 0777, true);
				}
								
				

				copy(SITE_IMG."/user.png", SITE_USER."/".$_SESSION['id_usuario']."/perfil/user.png");

			header("location: user");
		}

	}


		

	
	}
}