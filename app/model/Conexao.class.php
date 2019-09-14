<?php 

require_once("../config/config.php");

class Conexao{

	private $host, $user, $senha, $banco;
	protected $obj, $itens=array(), $prefix;

	function __construct(){
		$this->host = BD_HOST;
		$this->user = BD_USER;
		$this->senha = BD_PASS;
		$this->banco = BD_BANCO;
		$this->prefix = BD_PREFIX;

		try {

			if($this->Conectar() == null){
	
					$this->Conectar();

			}
			
		} 
		catch (PDOException $e) {
			exit($e->getMessage(). '<h2>Erro ao conectar ao banco de dados!</h2>');
			
		}
		catch (Exception $e) {
			exit($e->getMessage(). '<h2>Erro generico!</h2>');
			
		}
	}

	public function Conectar(){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
		);
		$link = new PDO("mysql:dbname={$this->banco};host={$this->host}", $this->user, 
			$this->senha, $options);
		return $link;
	}

	function ExecuteSql($query, array $params = NULL){
		$this->obj = $this->Conectar()->prepare($query);
		return $this->obj->execute($params);
	}
	function ListarDados(){
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}
	function TotalDados(){
		return $this->obj->rowCount();
	}
	function GetItens(){
		return $this->itens;
	}
	
	function selectDB($fields, $tabela, $where, $params){

		self::ExecuteSql("SELECT {$fields} FROM {$tabela} {$where}", $params);
		return $this->obj;
		
	}
	
	function insertDB($tabela, $values, $params){

		self::ExecuteSql("INSERT INTO $tabela values ($values)", $params);
		return $this->obj;
		
	}

	function deleteDB($tabela, $where, $params){
		self::ExecuteSql("DELETE FROM {$tabela} where {$where}", $params);
		return $this->obj;
	}

	function updateDB($tabela, $values, $where, $params){
		self::ExecuteSql("UPDATE {$tabela} SET {$values} WHERE {$where}", $params);
		return $this->obj;
		
	}
	function recuperaId($id, $tabela){
		 self::ExecuteSql("SELECT $id FROM $tabela WHERE $id ORDER BY $id DESC LIMIT 1");
		 $i = $this->ListarDados();
		 return $i[$id];
	}

	function Authent($email, $senha){

		self::ExecuteSql("SELECT * FROM tb_pessoas, tb_usuarios where pes_email = '$email' AND user_senha = '$senha'");
		
		if (self::TotalDados() > 0) {

				$idSelect = $this->ListarDados();
				$_SESSION['id_usuario'] = $idSelect['id_pessoa'];
				$_SESSION['email_usuario'] = $idSelect['pes_email'];
				$_SESSION['senha_usuario'] = $idSelect['user_senha'];
				$_SESSION['img_usuario'] = $idSelect['user_img'];
				$_SESSION['nome_usuario'] = $idSelect['pes_nome'];
				$_SESSION['sobrenome_usuario'] = $idSelect['pes_sobrenome'];
				$_SESSION['status'] = 'online';
				


				return true;

				
				
		}else{
				
				echo "<sript>alert('ERRO AO SE CONECTAR COM O USUARIO');</script>";
		}

	}
}