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
		$tel = addslashes($_POST['tel']);
		$cel = addslashes($_POST['cel']);
		$Endereço = addslashes($_POST['Endereço']);
		$bairro =addslashes($_POST['bairro']);
		$cidade = addslashes($_POST['cidade']);
		$estado = addslashes($_POST['estado']);
		$cep = addslashes($_POST['cep']);

				
		$conexao->insertDB("pessoas", "?,?,?,?,?,?,?,?,?,?,?,?",array('', $nome, $sobrenome, $sexo, $nasc, $cpf, $tel, $cel, $email, $senha,'C', 'user'));
		
		$id1 = $conexao->recuperaId('pes_id', 'pessoas');

		$conexao->insertDB("enderecos", "?,?,?,?,?,?,?",array('', $cep, $Endereço, $bairro, $cidade, $estado, $id1));
		$conexao->Authent($email, $senha);


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