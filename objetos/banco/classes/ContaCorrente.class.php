<?php
require_once 'Conta.class.php';
class ContaCorrente extends Conta {
    private $limite;
    private const TAXA = 0.50;
    private static $qntContas = 0;

    public function __construct() {
        self::$qntContas++;
    }

    public function getLimite() {
        return $this->limete;
    }
    public function setLimite($limite) {
        $this->limite = $limite;
    }

    public function sacar($valor) {
        $saldoVirtual = parent::getSaldo() + $this->limite + self::TAXA;
        if (!is_numeric($valor)) {
            throw new Exception("O valor deve ser um número!");
        } else if ($valor <= 0) {
            throw new Exception("O valor deve ser maior que zero!");
        } else if ($valor > $saldoVirtual) {
            throw new Exception("Saldo insuficiente!");
        } else {
            $novoSaldo = parent::getSaldo() - $valor - self::TAXA;
            parent::setSaldo($novoSaldo);
        }
    }

    public static function getQuantidadeContas() {
        return self::$qntContas;
    }
}