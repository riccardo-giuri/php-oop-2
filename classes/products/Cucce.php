<?php 
require_once __DIR__ . "/Prodotto.php";

class Cucce extends Prodotto {
    private string $lunghezzaCM;
    private float $materiale;

    public function __construct(string $_lunghezzaCM, float $_materiale, string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale) {
        parent::__construct($_nome, $_marca, $_prezzo, $_tipoAnimale);

        $this->lunghezzaCM = $_lunghezzaCM;
        $this->materiale = $_materiale;
    }

    public function getLunghezzaCM(): string
    {
        return $this->lunghezzaCM;
    }


    public function setLunghezzaCM(string $lunghezzaCM)
    {
        $this->lunghezzaCM = $lunghezzaCM;
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