<?php

function list_generate($articles){
    foreach($articles as $article){
        echo '<ul>
        <li>' . $article . '</li>
        </ul>';
    }
}
?>