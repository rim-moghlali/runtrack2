<?php
    session_start();                       
        if(!isset($_SESSION['nbvisites'])){
        $_SESSION ['nbvisites'] = 0;             
         }

        if (isset($_POST['reset'])){      
        $_SESSION ['nbvisites'] = 0;       
        }

        $_SESSION['nbvisites'] ++;             

    echo 'Le nombre des visites du site est : '. $_SESSION ['nbvisites']
?>