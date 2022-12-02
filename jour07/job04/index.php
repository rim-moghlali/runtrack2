<?php
    
    function calcule($a, $operation, $b) {
        switch ($operation) {
            case '+':
                return $a+$b;
                break;
            
            case '-':
                return $a-$b;
                break;

            case '*':
                return $a*$b;
                break;

            case '/':
                return $a/$b;
                break;

            case '%':
                return $a%$b;
                break;
        }

     }
     $resultat = calcule(11,'*',85);
     echo $resultat;

?>