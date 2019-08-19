<?php 


class Login{

	
		function Conect(){
			if(isset($_POST['email'])) {
				$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
				$senha = $_POST['senha'];


				$conexao = new Conexao();
				$retorno = $conexao->Authent("$email", "$senha");
				
				return $retorno;
		
			}else {
				
			}
		}


}