<?php

require_once("Pedido.php");

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;

	public function setUp()
	{
		//$this->estoque = new Estoque();
		$this->estoque = $this->getMockBuilder("Estoque")->getMock();
	}


	public function testDeveFecharPedido()
	{
		$item 	=  "blusa alca azul";
		$quantidade = 5;
		$this->estoque->expects( $this->once() )
			->method("getItem")
			->with($this->equalTo($item))
			->will($this->returnValue($quantidade));

		$this->estoque->expects( $this->once() )
			->method("remove")
			->with(
				$this->equalTo($item),
				$this->equalTo($quantidade)
			);

		$pedido = new Pedido($item, $quantidade);

		$pedido->fecharPedido($this->estoque);

		$pedido->assertTrue( $pedido->isFinalizado() );
	}



	public function testNaoDeveFecharPedido()
	{
		$item 	=  "blusa alca azul";
		$quantidade = 5;

		
		$this->estoque->expects( $this->once() )
			->method("getItem")
			->with($this->equalTo($item))
			->will($this->returnValue(0));

		
		$this->estoque->expects( $this->never() )
			->method("removeItem");

		$pedido = new Pedido($item, $quantidade);

		$pedido->fechar($this->estoque);

		$pedido->assertTrue( $pedido->isFinalizado() );
	}

	
	
}