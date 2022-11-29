<?php 

    $str = "i'm sorry Dave i'm afraid i can't do that";

    $voyelle = ['a','e','i','o','u','y','A','E','I','O','U','Y'];

    for($i=0; isset($str[$i]); $i++){
        foreach ($voyelle as $value){
            if ($value === $str[$i]){ 
                echo $str[$i];
            }
        }
        
    }

?>