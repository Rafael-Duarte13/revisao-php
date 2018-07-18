<?php
require_once 'ContaInvestimento.class.php';
class ContaAcao extends ContaInvestimento {
    private $percentual = 10;
    
    public function renda() {
        $renda = parent::getSaldo() * $this->percentual / 100;
        $novoSaldo = parent::getSaldo() + $renda;
        parent::setSaldo($novoSaldo);
    }
}