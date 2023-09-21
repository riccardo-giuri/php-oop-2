<?php 
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    private string $gusto;
    private float $peso;

    public function __construct(string $_gusto, float $_peso, string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale) {
        parent::__construct($_nome, $_marca, $_prezzo, $_tipoAnimale);

        $this->gusto = $_gusto;
        $this->peso = $_peso;
    }

    public function getGusto(): string {
        return $this->gusto;
    }

    public function setGusto(string $gusto) {
        $this->gusto = $gusto;
    }

    public function getPeso(): float {
        return $this->peso;
    }

    public function setPeso(float $peso) {
        $this->peso = $peso;
    }
}