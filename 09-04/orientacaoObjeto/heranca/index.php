<?php

require_once "Conta.class.php";
require_once "Poupanca.class.php";
require_once "Corrente.class.php";

$contaPoupanca = new Poupanca(10,"Caixa Federal","2345-10","João Oliveira",1000);

echo "<div>";
echo "Titular: ".$contaPoupanca->getTitular()."<br>";
echo "Agência: ".$contaPoupanca->getAgencia()."<br>";
echo "Conta: ".$contaPoupanca->getNumero()."<br>";
echo "Aniversário: ".$contaPoupanca->getAniversario()."<br>";
echo "Saldo: ".$contaPoupanca->getSaldo()."<br>";
echo "</div>";

$contaCorrente = new Corrente(5000,"Banco do Brasil","1234-05","Maria Silva",1400);

echo "<div>";
echo "Titular: {$contaCorrente->getTitular()}<br>";
echo "Agência: {$contaCorrente->getAgencia()}<br>";
echo "Conta: {$contaCorrente->getNumero()}<br>";
echo "Saldo: {$contaCorrente->getSaldo()}<br>";
echo "Limite: {$contaCorrente->getLimite()}<br>";
echo "</div>";
?>

<style>
    div{
        border-bottom: 1px solid black;
        width: 30%;
        padding: 10px 0;
    }
</style>
