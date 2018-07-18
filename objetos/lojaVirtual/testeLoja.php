<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/Produto.class.php';
require_once 'classes/Compra.class.php';

//#==================================================================================#
$produto01 = new Produto();
$produto01->setNomeProduto('SANSUMG GALAXY A8');
$produto01->setCodigo('200');
$produto01->setPreco(1999.0);
$produto01->setSecao('Celulares');
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$produto02 = new Produto();
$produto02->setNomeProduto('SANSUMG GALAXY A8+');
$produto02->setCodigo('201');
$produto02->setPreco(2499.0);
$produto02->setSecao('Celulares');
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$produto03 = new Produto();
$produto03->setNomeProduto('SANSUMG GALAXY S9');
$produto03->setCodigo('202');
$produto03->setPreco(3999.0);
$produto03->setSecao('Celulares');

$produto04 = new Produto();
$produto04->setNomeProduto('SMART TV LG 49');
$produto04->setCodigo('203');
$produto04->setPreco(2199.0);
$produto04->setSecao('TV');
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$produto05 = new Produto();
$produto05->setNomeProduto('SMART TV LG 49 4K');
$produto05->setCodigo('204');
$produto05->setPreco(4499.0);
$produto05->setSecao('TV');
//#==================================================================================#

//#==================================================================================#
$cliente001 = new Cliente();
$cliente001->setNome('Rafael Neto');
$cliente001->setCpf('017.010.934-80');
$cliente001->setEmail('jrd.neto3047@gmail.com');
$cliente001->setIdade(18);
$cliente001->setSexo('m');
//#==================================================================================#

//#==================================================================================#
$compra01 = new Compra();
$compra01->setCliente($cliente001);
//#==================================================================================#

?>
<pre><?php var_dump($compra01) ?></pre>