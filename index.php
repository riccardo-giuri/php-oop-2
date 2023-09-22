<?php 
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/classes/Animale.php";
require_once __DIR__ . "/classes/products/Prodotto.php";
require_once __DIR__ . "/classes/products/Cibo.php";
require_once __DIR__ . "/classes/products/Cucce.php";
require_once __DIR__ . "/classes/products/Gioco.php";

$listaProdotti = [];

foreach($listaGiochi as $gioco) {
    $newGame = new Gioco(   
        _nome: $gioco['nome'],
        _marca: $gioco['marca'],
        _prezzo: $gioco['prezzo'],
        _tipoAnimale: $gioco['animale'],
        _materiale: $gioco['materiale'],
        _taglia: $gioco['taglia'],
        _imageURL: $gioco['immagine']);

    try {
        $newGame->applySconto($newGame->getPrezzo(), $gioco['sconto']);
    }
    catch(Exception $e) {
        echo 'Eccezione:' . $e->getMessage();
    } 
    
    $listaProdotti[] = $newGame;
};

foreach($listaCibi as $cibo) {
    $newCibo = new Cibo(   
        _nome: $cibo['nome'],
        _marca: $cibo['marca'],
        _prezzo: $cibo['prezzo'],
        _tipoAnimale: $cibo['animale'],
        _peso: $cibo['peso'],
        _gusto: $cibo['gusto'],
        _imageURL: $cibo['immagine']);

    try {
        $newCibo->applySconto($newCibo->getPrezzo(), $cibo['sconto']);
    }
    catch(Exception $e) {
        echo 'Eccezione:' . $e->getMessage();
    } 

    $listaProdotti[] = $newCibo;
};

foreach($listaCucce as $cuccia) {
    
    $newCuccia = new Cucce(   
        _nome: $cuccia['nome'],
        _marca: $cuccia['marca'],
        _prezzo: $cuccia['prezzo'],
        _tipoAnimale: $cuccia['animale'],
        _materiale: $cuccia['materiale'],
        _lunghezzaCM: $cuccia['lunghezza'],
        _imageURL: $cuccia['immagine']);

    try{
        $newCuccia->applySconto($newCuccia->getPrezzo(), $cuccia['sconto']);
    }catch(Exception $e) {
        echo 'Eccezione:' . $e->getMessage();
    }

    $listaProdotti[] = $newCuccia;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce-Giuri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1 class="text-center">E-Commerce</h1>

    <div class="container">
        <div class="row">
            <?php foreach($listaProdotti as $prodotto) {?>

            <div class="col-3 mb-4">
                <?php $prodotto->printHTML() ?>
            </div>

            <?php } ?>
        </div>
    </div>
</body>
</html>