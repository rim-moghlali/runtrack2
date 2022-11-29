<?php
   
    // var_dump($_POST);
    $resultat = 0;
    foreach ($_POST as $arg) {
        $resultat += 1;
        // echo $arg;
    } 
    echo "Le nombre d'argument POST est: $resultat";

?>

<html>
    <head>
        <meta charset="utf-8">
        <title> Job 03 - jour 04 | PHP</title>
        <style>
             body {
                display: flex;
                flex-direction: column;
             }    
             form{
                display: flex;
                flex-direction: column;
             }
             input{
                max-width: 300px;
             }
        </style>

    </head>

    <body>
        <!-- <p>Le nombre d'argument Post est:</p> -->
        
        <form method="post">
            
            <!--  Nom input -->
            <label for="name"> Nom </label>
            <input type="text" name="nom" required>
                
             <!--  Prenom input -->
            <label for="name"> Prenom </label>
            <input type="text" name="prenom" required>
                
             <!--  Age input -->
            <label for="age"> Age </label>
            <input type="text" name="age" required>
            
             <input type="submit">

        </form>
    </body>
    
</html>