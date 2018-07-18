<?php
require_once 'Secoes.class.php';
class Produto extends Secoes {
    private $nomeProduto;
    private $codigo;
    private $preco;

    public function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }
    public function getNomeProduto() {
        return $this->nomeProduto;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function getCodigo() {
        return $this->codigo;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }
}