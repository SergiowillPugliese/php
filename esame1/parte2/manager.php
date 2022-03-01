<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
</head>


</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $fp = fopen('cantiere.txt','w+');
    $scritto1 = $_POST['q'];
    fwrite($fp,$scritto1);
    fclose($fp);
    header("Location: tabella.php");

    
} else {

?>

 <form action="" method="POST">
nome del cantiere <input type="text" name="q"> <br>
<input type="submit">   

</form>
<?php
}
