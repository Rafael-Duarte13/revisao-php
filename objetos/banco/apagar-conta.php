<?php
require_once 'classes/BancoDB.class.php';

$conta = $_POST['conta'];
$banco = new BancoDB();
$banco->apagarContaNumero($conta);

header('location: cadastro.php');