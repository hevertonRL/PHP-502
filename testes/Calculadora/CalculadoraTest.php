<?php

	require_once("Calculadora.php");

	use PHPUnit\Framework\TestCase;

	class CalculadoraTest extends TestCase
	{
		// Teste para a funcao de Soma
		// Teste para a funcao de Subtrair
		// Teste para a funcao de Dividir
		// Teste para a funcao de Multiplicar

		public function setUp()
		{
			$this->calculadora = new Calculadora(3,3);
		}
		
		public function testSoma()
		{
			$this->assertSame(6, $this->calculadora->somar() );
		}

	}	