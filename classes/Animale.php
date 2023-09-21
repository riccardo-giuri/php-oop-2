<?php 

class Animale {
    private string $nome;
    private string $icona;

    public function __construct(string $_nome, string $_icona) {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $value) {
        $this->nome = $value;
    }

    public function getIcona() {
        return $this->icona;
    }

    public function setIcona(string $value) {
        $this->icona = $value;
    }
}