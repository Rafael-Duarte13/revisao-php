<?php
class Cliente {
    private $nome;
    private $cpf;
    private $email;
    private $idade;
    private $sexo;

    public function setNome($nome) {
        $qntCarac = strlen($nome);
        if ($qntCarac >= 3) {
            $this->nome = $nome;
        } else {
            $this->nome = '';
        }
    }
    public function getNome() {
        return $this->nome;
    }

    public function setCpf($cpf) {
        $qntCarac = strlen($cpf);
        if ($qntCarac == 14) {
            $this->cpf = $cpf;
        } else {
            $this->cpf = '';
        }
    }
    public function getCpf() {
        return $this->cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getIdade() {
        return $this->idade;
    }

    public function setSexo($sexo) {
        $genero = strtoupper($sexo);
        if ($genero != 'F') {
            $this->sexo = 'M';
        } else {
            $this->sexo = 'F';
        }
    }
    public function getSexo() {
        return $this->sexo;
    }
}