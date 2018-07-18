<?php
require_once 'Cliente.class.php';
abstract class Conta {
    private $cliente;
    private $agencia;
    private $numero;
    private $saldo;

    function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }
    function getCliente() {
        return $this->cliente;
    }

    function setAgencia($agencia) {
        $this->agencia = $agencia;
    }
    function getAgencia() {
        return $this->agencia;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }
    function getNumero() {
        return $this->numero;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    function getSaldo() {
        return $this->saldo;
    }

    public abstract function sacar($valor);

    public function deposito($valor) {
        if (is_numeric($valor) && $valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    public function transfere($valor, Conta $conta) {
        if ($this->sacar($valor)) {
            $conta->deposito($valor);
            return true;
        }
        return false;
    }

    public function __toString() {
        $resultado = '>';
        $resultado .= $this->agencia;
        $resultado .= '|';
        $resultado .= $this->numero;
        $resultado .= '|';
        $resultado .= $this->saldo;
        $resultado .= '|';
        $resultado .= $this->cliente->getNome();
        $resultado .= '|';
        $resultado .= $this->cliente->getCpf();
        $resultado .= chr(10);
        return $resultado;
    }
}