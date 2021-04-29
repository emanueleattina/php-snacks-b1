<?php

// creare un array di array
// ogni array figlio avrà una data DD/MM/YYYY
// come valore un array di post associati a quella data
// stampare ogni data con i relativi post

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

var_dump($posts);

for($i = 0; $i < count($posts['10/01/2019']); $i++) {
    echo '<br>'.$posts['10/01/2019'][$i]['title'];
    echo '<br>'.$posts['10/01/2019'][$i]['author'];
    echo '<br>'.$posts['10/01/2019'][$i]['text'].'<br>';
}

for($i = 0; $i < count($posts['10/02/2019']); $i++) {
    echo '<br>'.$posts['10/02/2019'][$i]['title'];
    echo '<br>'.$posts['10/02/2019'][$i]['author'];
    echo '<br>'.$posts['10/02/2019'][$i]['text'].'<br>';
}

for($i = 0; $i < count($posts['15/05/2019']); $i++) {
    echo '<br>'.$posts['15/05/2019'][$i]['title'];
    echo '<br>'.$posts['15/05/2019'][$i]['author'];
    echo '<br>'.$posts['15/05/2019'][$i]['text'].'<br>';
}

?>