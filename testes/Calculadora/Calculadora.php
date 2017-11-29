<?php

	use PHPUnit\Framework\TestCase;

	class Calculadora
	{    
		private $valor1;
		private $valor2;

		private function __construt($valor1, $valor2)
		{
			$this->valor1 = $valor1;
			$this->valor2 = $valor2;
		}

		function somar()
		{
			return $this->valor1 + $this->valor2;
		}

		function subtrair()
		{
			return $this->valor1 - $this->valor2;
		}

		function dividir()
		{
			return $this->valor1 / $this->valor2;
		}

		function multiplicar()
		{
			return $this->valor1 * $this->valor2;
		}
		
	}	