<?php

?>

<html>
    <head>
        <meta charset="utf-8">
        <title> Job 01 - jour 04 | PHP</title>
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
        <p>Le nombre d'argument GET est:</p>
        
        <form method="post">
            
            <!--  Nom input -->
            <label for="name"> Nom </label>
            <input type="text" name="nom">
                
             <!--  Prenom input -->
            <label for="name"> Prenom </label>
            <input type="text" name="prenom">
                
             <!--  Age input -->
            <label for="age"> Age </label>
            <input type="text" name="age">
            
             <input type="submit">

        </form>
    </body>
    
</html>