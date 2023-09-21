<?php 
require_once __DIR__ . "/Prodotto.php";

class Giochi extends Prodotto {
    //costanti di taglia
    const S = "s";
    const M = "m";
    const L = "l";
    const XL = "xl";

    //taglia
    private string $taglia;

    //materiale
    private float $materiale;


    //getter and setters
    public function __construct(string $_taglia, float $_materiale, string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale) {
        parent::__construct($_nome, $_marca, $_prezzo, $_tipoAnimale);

        $this->taglia = $_taglia;
        $this->materiale = $_materiale;
    }

    public function getTaglia(): string
    {
        return $this->taglia;
    }

    public function setTaglia(string $taglia)
    {
        $this->taglia = $taglia;
    }

    public function getMateriale(): float
    {
        return $this->materiale;
    }

    public function setMateriale(float $materiale)
    {
        $this->materiale = $materiale;
    }
}