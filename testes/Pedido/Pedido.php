<?php
require_once("../Estoque/Estoque.php");

class Pedido
{
	private $item;
	private $quantidade;
	private $finalizado = false;
	

	public function addItem($item, $quantidade)
	{
		if( isset( $this->itens[$item] ) )
		{
			$this->itens[$item] += $quantidade;
		}
		else
		{
			$this->itens[$item]	= $quantidade;	
		}
	}


	public function getItem($item)
	{
		if( isset( $this->itens[$item] ) )
		{
			return $this->itens[$item];
		}
	}
	
	// public function fechar(Estoque $estoque)
	// {
	// 	if($estoque-> get($this->item) >=  $this->quantidade)
	// 	{
			
	// 	}

	// 	throw new InvalidArgumentException("Item não existe no estoque");
	// }	

	
	public function removeItem($item, $quantidade)
	{
		if( isset( $this->itens[$item] ) )
		{
			$this->itens[$item] -= $quantidade;
		}


		return $this;
	}
}