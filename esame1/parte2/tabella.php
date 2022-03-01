<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tabella</title>
  </head>
  <body>
    <?php
    require('intestazione.php');
    require('dati.php');

    echo '<div class="container my-5">
            <h1>' . nomeCantiere() . '</h1
                <form action="">
                     ora inizio <label for=""></label>
                     <input type="textarea" name="orainizio" value="">
                     ora fine <label for=""></label>
                     <input type="textarea" name="orafine" value="">
                     <input type="submit" value="invia">
                 </form>';

    echo '<table class="table">
                <thead>
                  <tr>
                  <th scope="col">Numero di carriole</th>
                  <th scope="col">Numero di carri</th>
                  <th scope="col">Numero di camion</th>
                  <th scope="col">Kg complessivi trasportati</th>
                  </tr>
                  </thead>
                  <tbody>';
                  foreach ($trasporti as $trasp => '0') {
                    echo '<td>' . $trasp . '</td>';
                  }
                                   
                echo '</tbody>
          </table>';

   
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
