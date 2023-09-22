<?php 
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto {
    //costanti di taglia
    const S = "S";
    const M = "M";
    const L = "L";
    const XL = "XL";

    //taglia
    private string $taglia;

    //materiale
    private string $materiale;


    //getter and setters
    public function __construct(string $_taglia, string $_materiale, string $_nome, string $_marca, float $_prezzo, Animale $_tipoAnimale, string $_imageURL) {
        parent::__construct($_nome, $_marca, $_prezzo, $_tipoAnimale, $_imageURL);

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

    public function getMateriale(): string
    {
        return $this->materiale;
    }

    public function setMateriale(string $materiale)
    {
        $this->materiale = $materiale;
    }

    //metodi di classe

    public function printHTML() {
        ?>
        <div class="card h-100">
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
                <div class="card-text">Taglia: <?php echo $this->getTaglia()?></div>
            </div>
        </div>
        <?php
    }
}