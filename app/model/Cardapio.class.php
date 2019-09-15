<?php 

/**
 * 
 */
class Cardapio extends Conexao
{
	
	function __construct()
	{
		parent::__construct();
	}

	function GetProdutos(){
		//query  para buscar produtos de uma categoria especifica 
		$query = "SELECT * from tb_produtos p inner join tb_tamanho t on p.tamanho_id = t.id_tamanho inner join tb_categoria c on p.categoria_id = c.id_categoria";
		// .= concatenar query

		// $query .= 'ORDER BY id_produto DESC';

		$this->ExecuteSql($query);
		$this->GetLista();

	}
	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'prod_id' => $lista['id_produto'],
			'prod_nome' => $lista['prod_nome'],
			'prod_descricao' => $lista['prod_descricao'],
			'prod_preco' => $lista['prod_preco'],
			'prod_img'  => $lista['prod_img' ],
			'prod_ativo' => $lista['prod_ativo'],
			'cat_nome' => $lista['cat_nome' ],
			'tam_nome' => $lista['tam_nome' ]
		);
		$i++;
	 	endwhile;
	}
}