<?php
abstract class Pessoa {
    private $nome;
    private $sexo;
    protected $idade;

    function __construct($nome, $sexo, $idade) {
        $this->setNome($nome);
        $this->setSexo($sexo);
        $this->setIdade($idade);
    }

    function setNome($nome) {
        $qtdCaracteres = strlen($nome); //Ver quantas caracteres foi digitadas.
        if ($qtdCaracteres > 1) {
            $this->nome = strtoupper($nome); //Deixar a string com letras maiusculas.
        } else {
            $this->nome = '';
        }
    }
    function getNome() {
        return $this->nome;
    }

    function setSexo($sexo) {
        $sex = strtoupper($sexo);
        if ($sex != 'F') {
            $this->sexo = 'M';
        } else {
            $this->sexo = 'F';
        }
    }
    function getSexo() {
        return $this->sexo;  
    }

    abstract function setIdade($idade);

    function getIdade() {
        return $this->idade;
    }
}