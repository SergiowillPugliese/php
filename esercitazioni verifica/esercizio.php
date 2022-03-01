<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizi di preparazione a verifica del 24/02/22</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php

        echo '<h6>1) Scrivere il codice che stampa la stringa "Hello world!"</h6>';
        
        echo "Hello world <br>";
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo '<h6>2) dichiarare una variabile $a ed assegnare il valore 5; dichiarare una variabile $b ed
        assegnare il valore 10. Stampare i valori delle due variabili premettando al valore una
        etichetta: "la variabile x vale: " dove x sta ad indicare il nome della variabile</h6><br>';
        
        $a = 5;
        $b = 10;
        echo 'la variabile $a vale: ' . $a . '<br>';
        echo 'la variabile $b vale: ' . $b . '<br>';
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo '<h6>3) utilizzando le variabili precedenti adoperare le operazioni aritmetiche alle due
        variabili e stamparne la somma, la differenza, il prodotto e il rapporto (divisione)</h6><br>';
        
        echo 'la somma tra $a e $b è di: ' . $a + $b . '<br>';
        echo 'la differenza tra $a e $b è di: ' . $b - $a . '<br>';
        echo 'il prodotto tra $a e $b è di: ' . $a * $b . '<br>';
        echo 'il raporto tra $a e $b è di: ' . $b / $a . '<br>';
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo '<h6>4) utilizzare la funzione date() e stampare la data corrente nella forma 18/01/2021.
        Nella riga successiva stampare nella forma 2021-01-18.Nella riga seguente stampare
        nella forma ore:minuti:secondi</h6><br>';
        
        echo date('d/m/Y')   . "<br>";
        echo date('Y-m-d')   . "<br>";
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo "<h6>5) definire una variabile town ed assegnare il valore Torino . Definire una
        variabile region e assegnare il valore Piemonte. Utilizzando l'operatore di
        concatenazione e le variabili appena definite stampare: <br>
        Torino è il capoluogo delle regione Piemonte. <br>
        Ripetere l'operazione assegnando la stringa precednente (composta dalla
        concatenazione ) ad una variabile di nome messaggio. Stampare la variabile
        messaggio.</h6><br>";
        
        $town = "Torino";
        $region = "Piemonte";
        $messaggio = " è il capoluogo della regione ";
        echo $town . $messaggio . $region;
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo "<h6>6) definire con il costrutto define una entità chiamata IVA e valorizzarla al valore 22.
        Dichiarare una variabile di nome costo ed assegnare il valore 40. Dichiarare una
        variabile costo_ivato ed assegnare il valore ottenuto applicando l'IVA definita in
        precedenza al costo.Utilizzando le due variabili e il valore costante definito stampare
        il messaggio:<br>
        Il prodotto costa 40 euro + IVA 22% per un totale di 48,8 euro
        Utilizzare le funzioni di concatenazione viste in precedenza</h6>";
        echo '<br>';
        define('IVA', 22);
        $costo = 40 ;
        $costo_ivato = $costo * (100 + IVA)/100;
        echo 'Il prodotto costa ' .$costo . ' euro + IVA ' . IVA . '% per un totale di '  . $costo_ivato .   ' euro '
        . "<br>";
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo "<h6>7) stampare il valore delle magic_constant __DIR__ e __FILE__ e __LINE__</h6>";
        echo '<br>';
        echo 'il valore di __DIR__:' . __DIR__  . '<br>';
        echo 'il valore di __FILE__  :' . __FILE__ . '<br>';
        echo 'il valore di __LINE__ : ' . __LINE__ . '<br>';
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo "<h6>8) definire una variabile i, assegnare il valore 12, stampare il valore, utilizzare
        l'operatore di incremento ++ e stamparne nuovamente il valore.</h6>";
        echo '<br>';
        $i = 12;
        echo 'la variabile $i vale: ' . $i . '<br>';
        $i++;
        echo "dopo l'incremento la vabile vale: " . $i;
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        echo '<h6>9) definire una variabile $area_quadrato ed assegnare il valore 900; utilizzando la
        funzione sqrt() calcolarne la radice quadrata e stampare il messaggio:
        il quadrato ha area 900 e il suo lato calcolato con la radice quadrata vale 30</h6>';
        echo '<br>';
        $area= 900;
        $lato= sqrt($area);
        echo '<br>';
        echo '------------------------------------------------------------------------------------<br>';


        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>