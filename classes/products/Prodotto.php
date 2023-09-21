<?php

class Prodotto {
    private string $nome;
    private string $marca;
    private float $prezzo;

    public function __construct(string $_nome, string $_marca, float $_prezzo)
    {
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $value) {
        $this->nome = $value;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca(string $value) {
        $this->marca = $value;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setPrezzo(float $value) {
        $this->prezzo = $value;
    }
}