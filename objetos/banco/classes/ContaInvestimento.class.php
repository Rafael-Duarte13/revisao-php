<?php
require_once 'Conta.class.php';
abstract class ContaInvestimento extends Conta {
    private $rendimento;

    public function getRendimento() {
        return $this->rendimento;
    }
    public function setRendimento($rendimento) {
        $this->rendimento = $rendimento;
    }

    public function sacar($valor) {
        if (is_numeric($valor) && $valor > 0 && $valor <= parent::getSaldo()) {
            $novoSaldo = parent::getSaldo() - $valor;
            parent::setSaldo($novoSaldo);
            return true;
        }
        return false;
    }

    public abstract function renda();
}