<?php
abstract class Secoes {
    private $secao;

    public function setSecao($secao) {
        $this->secao = $secao;
    }
    public function getSecao() {
        return $this->secao;
    }
}