<?php

require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/ContaPoupanca.class.php';
require_once 'classes/ContaAcao.class.php';
require_once 'classes/BancoDB.class.php';

$rafael = new Cliente();
$rafael->setNome('Josimar Barbosa Duarte');
$rafael->setEmail('josi@gmail.com');
$rafael->setCpf('151116164');
$rafael->setIdade(41);
$rafael->setSexo('m');

$contaRafa = new ContaCorrente();
$contaRafa->setCliente($rafael);
$contaRafa->setAgencia('5246');
$contaRafa->setNumero('123456');
$contaRafa->setSaldo(4000.0);

$banco = new BancoDB();
//$banco->salvar($contaRafa);

?>
<pre><?php var_dump($banco->obterContaPeloNumero('1245')); ?></pre>