<?php

class Prodotto {
    private string $nome;
    private string $marca;
    private float $prezzo;
    private Animale $tipoAnimale;
    private string $imageURL;

    public function __construct(string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale, string $_imageURL)
    {
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->tipoAnimale = $_tipoAnimale;
        $this->imageURL = $_imageURL;
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

    public function getTipoAnimale() {
        return $this->tipoAnimale;
    }

    public function setTipoAnimale(Animale $value) {
        $this->tipoAnimale = $value;
    }

    public function getImageURL(): string
    {
        return $this->imageURL;
    }

    public function setImageURL(string $imageURL)
    {
        $this->imageURL = $imageURL;
    }
}