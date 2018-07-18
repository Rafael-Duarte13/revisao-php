<?php
require_once 'classes/Pessoa.class.php';
require_once 'classes/Cliente.class.php';
$cliente = new Cliente('rafael neto', '017.010.934-80', 18, 'm', '3470');
echo "Nome: {$cliente->getNome()}<br>Cpf: {$cliente->getCpf()}<br>Idade: {$cliente->getIdade()}<br>Genero: {$cliente->getSexo()}<br>Cartão: {$cliente->getCartao()}";