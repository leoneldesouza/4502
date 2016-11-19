<?php

	require('../classes/Contas.php');

	class ConstasTest extends PHPUnit_Framework_TestCase{

			public finction testDepositarSuccess(){
				$conta = new Contas();
				$saldoAtual - $conta->getSaldo();
				$valorDeposito = 500;
				$valorAtualizado = $saldoAtual + $valorDeposito;

				$conta->deposiar($valorDeposito);
				$saldoAposDeposito = $conta->getSaldo();

				$this->assertEquals($valorAtualizado, $saldoAposDeposito);
	}
}