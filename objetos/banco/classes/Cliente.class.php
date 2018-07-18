<?php
class Cliente {
    private $cpf;
    private $nome;
    private $email;
    private $idade;
    private $sexo;

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    function getCpf() {
        return $this->cpf;
    }

    function setNome($nome) {
        $qntCaract = strlen($nome);
        if ($qntCaract >= 3) {
            $this->nome = strtoupper($nome);
        } else {
            $this->nome = '';
        }
    }
    function getNome() {
        return $this->nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    function getEmail() {
        return $this->email;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
    function getIdade() {
        return $this->idade;
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
}