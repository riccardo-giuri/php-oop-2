<?php 
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    private string $gusto;
    private float $peso;

    public function __construct(string $_gusto, float $_peso, string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale, string $_imageURL) {
        parent::__construct($_nome, $_marca, $_prezzo, $_tipoAnimale, $_imageURL);

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

    public function printHTML() {
        ?>
        <div class="card">
            <img src=<?php echo $this->getImageURL()?>  alt="" class="card-img-top">

            <div class="card-body fs-5">
                <h5 class="card-text">Prodotto: <?php echo $this->getNome()?></h5>
                <div class="card-text">Marca: <?php echo $this->getMarca()?></div>
                <div class="card-text">Prezzo: <?php echo $this->getPrezzo()?>€</div>
                <div class="card-text">Gusto: <?php echo $this->getGusto()?></div>
                <div>
                    <span class="card-text">Animale: <?php echo $this->getTipoAnimale()->getNome()?></span>
                    <?php echo $this->getTipoAnimale()->getIcona()?>
                </div>
                <div class="card-text">Peso: <?php echo $this->getPeso()?></div>
            </div>
        </div>
        <?php
    }
}