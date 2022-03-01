<?php
session_start();

$articles = ['il','le','la','i','gli','le'];
$animals = ['gatto', 'cane','topi','cervo','lepre','colomba'];

if (!isset($_SESSION['phrase'])) {
    $_SESSION['phrase']='';
}

if (isset($_GET['word'])){
    $_SESSION['phrase'].= $_GET['word'] . ' ';
    header('Location:frase.php');
    die();
}
?>

<table>
    <tr><td>Articoli</td><td>sostantivi</td></tr>
    <tr>
        <td>
            <ul>
                <?php
                foreach($articles as $article){
                 echo '<li>
                        <a href="frase.php?word='.$article.'">'.$article.'</a>
                    </li>';
                }
                ?>
                
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <ul>
            <?php
                foreach($animals as $animal){
                 echo '<li>
                        <a href="frase.php?word='.$animal.'">'.$animal.'</a>
                    </li>';
                }
                ?>
            </ul>
        </td>
    </tr>
</table>
<p>frase composta:<?= ' '.$_SESSION['phrase'].' ' ?> </p>
