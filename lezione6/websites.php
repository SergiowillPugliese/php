<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>




    <?php
    $urls = [
        [
            'nome' => 'la stampa',
            'url' => 'https://www.lastampa.it',
            'commenti' => 'sito del quotidiano'
        ],
        [
            'nome' => 'NASA',
            'url' => 'https://www.nasa.gov',
            'commenti' => 'sito ufficile della nasa'
        ],
        [
            'nome' => 'IBM',
            'url' => 'https://www.ibm.com',
            'commenti' => 'sito ufficiale di IBM'
        ]
    ];

    $i=1;
    echo '<table class="table" border=1>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">url</th>
            <th scope="col">commenti</th>
        </tr>
    </thead>
    <tbody>';

    foreach ($urls as $url) {

        echo '<tr>';
        echo '<th scope="row">'.$i++.'</th>';
        echo '<td>' . $url['nome'] . '</td>';
        echo '<td><a href="' . $url['url'] . '" target="_blank">' . $url['url'] . '</a></td> ';
        echo '<td>' . $url['commenti'] . '</td> ';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>