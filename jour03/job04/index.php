<?php
    $str = "Dans l'espace, personne ne vous entend crier";
  
    $nombre_de_caractere = 0;

    for($i=0; isset($str[$i]); $i++){
     $nombre_de_caractere += 1;   
    }
    echo "nombre de caractere : $nombre_de_caractere";
?>