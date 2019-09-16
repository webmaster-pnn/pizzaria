<?php
require_once("../lib/autoload.php");

class ControllerCardapio extends Rotas{

	function __construct(){


		$smarty = new SmartyConfig();
		$rotas = new Rotas();
		$cardapio = new Cardapio();
		$cardapio->GetProdutos();
		$cardapio->GetTamanho();
		$cardapio->GetCategoria();
		$conexao = new Conexao();


		
		$smarty->assign('GET_PUBLIC', $rotas->get_Public());

		if (isset($_POST['card-titulo-add'])) {
			if (isset($_FILES['arquivos'])) {
			$preco = 'R$:';


			$ativo = 1;



				
			$foto = $_FILES['arquivos']['name'];
			$nome = filter_input(INPUT_POST, 'card-titulo-add', FILTER_SANITIZE_SPECIAL_CHARS);
			if (isset($_POST['card-descricao-add'])) {
				$desc = filter_input(INPUT_POST, 'card-descricao-add', FILTER_SANITIZE_SPECIAL_CHARS);
			}
			$preco .= filter_input(INPUT_POST, 'card-preco-add', FILTER_SANITIZE_SPECIAL_CHARS);
			$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
			$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_SPECIAL_CHARS);
			
			// conversão dos nomes em id
			$queryTam = "SELECT id_tamanho from tb_tamanho where tam_nome = '$tamanho'";
			$conexao->ExecuteSql($queryTam);
			$idTamanho = $conexao->ListarDados();
			

					if ($categoria == "Massas") {
						// insert massas
						$conexao->insertDB("tb_produtos", "?,?,?,?,?,?,?,?",array('', $nome, $desc, $preco, $foto, $ativo, $idTamanho['id_tamanho'],  1));
					} else{
						// insert bebidas
						$conexao->insertDB("tb_produtos", "?,?,?,?,?,?,?,?",array('', $nome, null , $preco, $foto, $ativo, $idTamanho['id_tamanho'],  2));
					}
			

			// movendo a foto para a pasta publica de imagens
			if ($categoria == 'Massas') {
				move_uploaded_file($_FILES['arquivos']['tmp_name'],SITE_IMG."/massas/".$foto);
			} else {
				move_uploaded_file($_FILES['arquivos']['tmp_name'],SITE_IMG."/bebidas/".$foto);

			}

			
			
			
			}
		}
		
	}

}