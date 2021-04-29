<?php
// creare array contentente partite di basket
// ogni array avrà
    // squadra di casa
    // squadra ospite
    // punti squadra di casa
    // punti squadra ospite
// stampare a schermo le partite

$partita = [
    'squadra_di_casa' => [
        'nome' => 'olimpia milano',
        'punti' => 55
    ],
    'squadra_ospite' => [
        'nome' => 'cantu',
        'punti' => 60
    ],
];

var_dump($partita);
/*
for ($i = 1; $i < count($partita); $i++) { ?>
    <div>
        <?= $partita['squadra_di_casa']['nome']." - "; ?>
        <?= $partita['squadra_ospite']['nome']. " | "; ?>
        <?= $partita['squadra_di_casa']['punti']." - "; ?>
        <?= $partita['squadra_ospite']['punti']; ?>
    </div>
    <?php
}
*/

    echo $partita['squadra_di_casa']['nome']." - ";
    echo $partita['squadra_ospite']['nome']. " | ";
    echo $partita['squadra_di_casa']['punti']." - ";
    echo $partita['squadra_ospite']['punti'];


?>