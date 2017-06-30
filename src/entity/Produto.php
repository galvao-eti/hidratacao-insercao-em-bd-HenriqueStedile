<?php

namespace entity;

class Produto {

    private $idproduto;
    private $nome;
    private $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getIdproduto() {
        return $this->idproduto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setIdproduto($idproduto) {
        $this->idproduto = $idproduto;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    use traits\Hidratacao;

}
