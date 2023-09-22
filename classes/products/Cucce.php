<?php 
require_once __DIR__ . "/Prodotto.php";

class Cucce extends Prodotto {
    private float $lunghezzaCM;
    private string $materiale;

    public function __construct(float $_lunghezzaCM, string $_materiale, string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale, string $_imageURL) {
        parent::__construct($_nome, $_marca, $_prezzo, $_tipoAnimale, $_imageURL);

        $this->lunghezzaCM = $_lunghezzaCM;
        $this->materiale = $_materiale;
    }

    public function getLunghezzaCM(): float
    {
        return $this->lunghezzaCM;
    }


    public function setLunghezzaCM(float $lunghezzaCM)
    {
        $this->lunghezzaCM = $lunghezzaCM;
    }

    public function getMateriale(): string
    {
        return $this->materiale;
    }

    public function setMateriale(string $materiale)
    {
        $this->materiale = $materiale;

    }

    public function printHTML() {
        ?>
        <div class="card">
            <img src=<?php echo $this->getImageURL()?>  alt="" class="card-img-top">

            <div class="card-body fs-5">
                <h5 class="card-text">Prodotto: <?php echo $this->getNome()?></h5>
                <div class="card-text">Marca: <?php echo $this->getMarca()?></div>
                <div class="card-text">Sconto: <?php echo $this->getDiscountPercentage()?>%</div>
                <div class="card-text">Prezzo: <?php echo $this->getDiscountedPrice()?>€</div>
                <div class="card-text">Materiale: <?php echo $this->getMateriale()?></div>
                <div>
                    <span class="card-text">Animale: <?php echo $this->getTipoAnimale()->getNome()?></span>
                    <?php echo $this->getTipoAnimale()->getIcona()?>
                </div>
                <div class="card-text">Lunghezza: <?php echo $this->getLunghezzaCM()?>cm</div>
            </div>
        </div>
        <?php
    }
}