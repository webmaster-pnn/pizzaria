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
		$query = "SELECT * FROM {$this->prefix}tb_produtos p INNER JOIN {$this->prefix}tb_categorias c ON 	p.id_categoria = c.id_categoria";
		// .= concatenar query

		// $query .= 'ORDER BY cod_pro DESC';

		// $this->ExecuteSql($query);
		// $this->GetLista();

	}
	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'prod_id' => $lista['produtos_id'],
			'prod_nome' => $lista['prod_nome'],
			'prod_descricao' => $lista['prod_descricao'],
			'prod_preco' => $lista['prod_preco'],
			// 'prod_tamanho'  => $lista['prod_tamanho'],
			// 'prod_img'  => $lista['prod_img' ],
			// 'prod_ativo' => $lista['prod_ativo'],
			'id_categoria'  => $lista['id_categoria' ],
			'cat_nome' => $lista['cat_nome' ]
		);
		$i++;
	 	endwhile;
	}
}