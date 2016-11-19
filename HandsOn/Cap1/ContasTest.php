<?php

	require('../Cap1/classes/Contas.php');

	class ConstasTest extends PHPUnit_Framework_TestCase{

			public function testDepositarSuccess(){
				$conta = new Contas();
				$saldoAtual = $conta->getSaldo();
				$valorDeposito = 500;
				$valorAtualizado = $saldoAtual + $valorDeposito;

				$conta->depositar($valorDeposito);
				$saldoAposDeposito = $conta->getSaldo();

				$this->assertEquals($valorAtualizado, $saldoAposDeposito);
	}

		public function testSacarSuccess(){
			$conta = new Contas();
			$conta->depositar(500);
			$saldoAtual = $conta->getSaldo();
			$valorSacar = 300;

			$retorno = $conta->sacar($valorSacar);
			$this->assertTrue($retorno);
		}

		public function testSacarFail(){

			$conta = new Contas();
			$conta->depositar(500);
			$saldoAtual = $conta->getSaldo();
			$valorSacar = 1000;

			$retorno = $conta->sacar($valorSacar);
			$this->assertFalse($retorno);

		}
}