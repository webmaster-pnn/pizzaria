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
		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON 	p.cate_id = c.cate_id";
		// .= concatenar query

		// $query .= 'ORDER BY cod_pro DESC';

		$this->ExecuteSql($query);
		$this->GetLista();

	}
	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'prod_id' => $lista['prod_id'],
			'prod_nome' => $lista['prod_nome'],
			'prod_preco' => $lista['prod_preco'],
			'prod_tamanho'  => $lista['prod_tamanho'],
			'prod_descricao' => $lista['prod_descricao'],
			'prod_quantidade'  => $lista['prod_quantidade'],
			'prod_img'  => $lista['prod_img' ],
			'prod_ativo' => $lista['prod_ativo'],
			'cate_id'  => $lista['cate_id' ],
			'cate_nome' => $lista['cate_nome' ]
		);
		$i++;
	 	endwhile;
	}
}