<?php
    session_start();         
    
    if(!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;             
    }

    if (isset($_GET['reset'])) {      
        $_SESSION['nbvisites'] = 0;       
    }

    $_SESSION['nbvisites']++;          

    echo 'Le nombre des visites du site est : '. $_SESSION ['nbvisites'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jour08 - Job02</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <a href="?reset"><button>Reset</button></a>
    </body>
</html>