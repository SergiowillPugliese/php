<?php
// vogliao stampare i link con una hot word che ha il nome sito del link

// fare una variabile contenente u array di array associativi
//composti da due chiavi: titolo e url

$links = [
    [
        'titolo' => 'la stampa',
        'url' => 'https://www.lastampa.it',
        'descrizione' => 'sito del quotidiano'
    ],
    [
        'titolo' => 'NASA',
        'url' => 'https://www.nasa.gov',
        'descrizione' => 'sito ufficile della nasa'
    ],
    [
        'titolo' => 'IBM',
        'url' => 'https://www.ibm.com',
        'descrizione' => 'sito ufficiale di IBM'
    ]
];

echo '<ul>';
foreach ($links as $link) {

    echo '<li><a href="' . $link['url'] . '">' . $link['titolo'] . '</a></li>';
}
echo '</ul>';

echo '<hr>';
foreach($links as $link) {
echo '<table border=1>';

echo '<tr>';

echo '<td>' . $link['titolo'] . '</td>';

echo '<td>' . $link['descrizione'] . '</td> ';

echo '<td><a href="' . $link['url'] . '" target="_blank">' . $link['url'] . '</a></td> ';

echo '</tr>';
echo '</table>';
}

echo "<br>";

//voglio aggiungere un attributo ai link "tempo libero" e "lavoro"
//in modo da stampare due tabelle distinte, una con i link del tempo libero e una del lavoro
// IBM lavoro la stampa e nasa tempo libero

