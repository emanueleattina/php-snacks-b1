<?php

// creare un array contenente qualche alunno
// ogni alunno avrà:
    // nome
    // cognome
    // array con voti scolastici
// stampare nome, cognome e la media dei voti

$classe = [
    'alunno1' => [
        'nome' => 'andrea',
        'cognome' => 'angelino',
        'voti' => [3, 5, 7, 4, 7, 9]
    ],
    'alunno2' => [
        'nome' => 'pasquale',
        'cognome' => 'santana',
        'voti' => [2, 4, 1, 3, 3, 5]
    ],
    'alunno3' => [
        'nome' => 'alessandro',
        'cognome' => 'celadon',
        'voti' => [10, 8, 9, 3, 7, 7]
    ],
    'alunno4' => [
        'nome' => 'emanuele',
        'cognome' => 'attina',
        'voti' => [5, 6, 4, 8, 7, 8]
    ],
];

for($i = 0; $i < count($classe); $i++) {

    // $classe['alunno'.($i + 1)]['voti'] = array_sum($classe['alunno'.($i + 1)]['voti']) / count($classe['alunno'.($i + 1)]['voti']);
    $media = array_sum($classe['alunno'.($i + 1)]['voti']) / count($classe['alunno'.($i + 1)]['voti']);

    echo '<br>'.$classe['alunno'.($i + 1)]['nome'];
    echo '<br>'.$classe['alunno'.($i + 1)]['cognome'];
    // echo '<br>'.$classe['alunno'.($i + 1)]['voti'].'<br>';
    echo '<br>'.$media.'<br>';
}

?>