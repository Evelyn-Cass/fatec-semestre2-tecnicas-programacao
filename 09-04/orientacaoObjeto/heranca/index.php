<?php

require_once "Conta.class.php";
require_once "Poupanca.class.php";
require_once "Corrente.class.php";

$contaPoupanca = new Poupanca(10,"123","321","João",1000);

echo $contaPoupanca->getAniversario()."<br>";
echo $contaPoupanca->getSaldo();