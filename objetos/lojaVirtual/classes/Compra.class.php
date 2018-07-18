<?php
class Compra {
    private $cliente;
    private $produtos;
    private $valorTotal;

    public function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }
    public function getCliente() {
        return $this->cliente;
    }
}