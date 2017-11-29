<?php

	use PHPUnit\Framework\TestCase;

	class Cliente
	{
		private function __construt($nome)
		{
			$this->nome = $nome;
		}

		public function getNome()
		{
			return "Heverton";
		}
	}	