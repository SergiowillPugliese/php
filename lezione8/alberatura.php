<?php
$dirs=[
    'aziende'=>['ford','peugeot'],
    'persone'=>['mario','carla']
    ];
    
    foreach($dirs as $dir=>$subdirs){
        foreach($subdirs as $subdir){
            $dirname = $dir . '/'.$subdir;
            echo $dirname . '<br>';
            mkdir($dir . '/' . $subdir,0777,1);
        }
    }
//da rivedere, non funziona