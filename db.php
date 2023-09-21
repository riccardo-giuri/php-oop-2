<?php
require_once __DIR__ . "/classes/Animale.php";
require_once __DIR__ . "/classes/products/Gioco.php";

$listaAnimali = [
    'cane' => new Animale('cane', '<i class="fa-solid fa-dog"></i>'),
    'gatto' => new Animale('gatto', '<i class="fa-solid fa-cat"></i>')
];

$listaGiochi = [
    [
        'nome' => 'KONG Classic',
        'marca' => 'Kong',
        'prezzo' => 9.00,
        'materiale' => 'plastica',
        'taglia' => Gioco::S,
        'animale' => $listaAnimali['cane'],
        'immagine' => 'https://arcaplanet.vtexassets.com/arquivos/ids/256590/kong-classic1.jpg?v=1781655282'
    ],
    [
        'nome' => 'Dog Activity Snack Roll',
        'marca' => 'trixie',
        'prezzo' => 6.99,
        'materiale' => 'plastica',
        'taglia' => Gioco::M,
        'animale' => $listaAnimali['gatto'],
        'immagine' => 'https://arcaplanet.vtexassets.com/arquivos/ids/218387/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-dog-activity-snack-roll-in-plastica-gomma-naturale-6-5-x-14-cm-tric91.jpg?v=1780726572'
    ],
];

$listaCibi = [
    [
        'nome' => 'Monge All Breeds Adult Salmone e Riso',
        'marca' => 'Monge',
        'prezzo' => 49.99,
        'gusto' => 'salmone',
        'peso' => 12,
        'animale' => $listaAnimali['cane'],
        'immagine' => 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1781698282'
    ],
    [
        'nome' => 'Monge Maxi Adult Ricco di Pollo',
        'marca' => 'Monge',
        'prezzo' => 32.99,
        'gusto' => 'pollo',
        'peso' => 10,
        'animale' => $listaAnimali['cane'],
        'immagine' => 'https://arcaplanet.vtexassets.com/arquivos/ids/224355/monge-cane-adult-maxi-pollo.jpg?v=1781693398'
    ],
];

$listaCucce = [
    [
        'nome' => 'Cuccia Trilly Blu',
        'marca' => 'lovedi',
        'prezzo' => 22.50,
        'materiale' => 'cotone',
        'lunghezza' => 45,
        'animale' => $listaAnimali['gatto'],
        'immagine' => 'https://arcaplanet.vtexassets.com/arquivos/ids/260147/LD264---LD265---LD266---LD267---LD268--5-.jpg?v=1781655528'
    ],
    [
        'nome' => 'Cuccia Poker Indi',
        'marca' => 'lovedi',
        'prezzo' => 42.99,
        'materiale' => 'cotone',
        'lunghezza' => 60,
        'animale' => $listaAnimali['cane'],
        'immagine' => 'https://arcaplanet.vtexassets.com/arquivos/ids/273273/LOVEDI-CUCCIA-POKER-INDI-CM.53X53X23.jpg?v=1781647628'
    ],
];