<?php 

    $job1 = [
        '200' => 'est paire',
        '204' => 'est paire',
        '173' => 'est impaire',
        '98' => 'est paie',
        '171' => 'est impaire',
        '404' => 'est paire',
        '459' => 'est impaire',
    ];

    foreach ($job1 as $key => $value){
        echo "$key $value" ; 
        echo '<br/>';
    }

?>