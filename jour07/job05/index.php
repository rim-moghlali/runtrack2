<?php

    function occurences($str, $char) {
        $resultat  = 0;
        for ($a=0; isset($str[$a]); $a++) { 
            $lettre = $str[$a];
            if ($char == $lettre ) {
               $resultat += 1;
            }
        }
        return $resultat;
    }

    $str= "bonjour";
    $char= "o";
    $occ= occurences($str, $char);
    echo $occ;
?>