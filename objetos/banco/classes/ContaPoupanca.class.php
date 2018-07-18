<?php
require_once 'ContaInvestimento.class.php';
class ContaPoupanca extends ContaInvestimento {
    private $percentual = 1;
    
    public function renda() {
        $renda = parent::getSaldo() * $this->percentual / 100;
        $novoSaldo = parent::getSaldo() + $renda;
        parent::setSaldo($novoSaldo);
    }
}