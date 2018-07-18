<?php
class Vendedor extends Pessoa {
    private $matricula;
    private $salario;

    function __construct($matricula, $nome, $sexo, $idade, $salario) {
        parent::__construct($nome, $sexo, $idade);
        $this->setMatricula($matricula);
        $this->setSalario($salario);
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    function getMatricula() {
        return $this->matricula;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }
    function getSalario() {
        return $this->salario;
    }

    function setIdade($idade) {
        if (is_numeric($idade) && $idade >= 0 && $idade <= 150) {
            $this->idade = $idade;
        } else {
            $this->idade = 0;
        }
    }
}