<?php
require_once 'classes/Pessoa.class.php';
require_once 'classes/Vendedor.class.php';
$vendedor001 = new Vendedor('3366', 'Chico', 'm', 36, 1300);
echo "Matricula: {$vendedor001->getMatricula()}<br>Nome: {$vendedor001->getNome()}<br>Genero: {$vendedor001->getSexo()}<br>Idade: {$vendedor001->getIdade()}<br>Sálario: {$vendedor001->getSalario()}R$";