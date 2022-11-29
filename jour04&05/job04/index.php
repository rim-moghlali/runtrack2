<html>
    <head>
        <meta charset="utf-8">
        <title> Job 04 - jour 04 | PHP</title>
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
             td{
                border: 2px solid;
             }
             thead{
                font-weight: bold;
             }
        </style>

    </head>

    <body>
        <!-- <p>Le nombre d'argument POST est:</p> -->

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

            <!--  Taille input -->
            <label for="taille"> Taille </label>
            <input type="text" name="taille" required>

            <!--  nationalité input -->
            <label for="nationalite"> Nationalité </label>
            <input type="text" name="nationalite" required>

             <input type="submit">

        </form>

        <table>
             <thead>
                <tr>
                    <td>Argument</td>
                    <td>Valeur</td>
                </tr>
             </thead>
             <tbody>
             <?php 
                
                foreach ($_POST as $arg => $valeur) {
                    // $valeur += 1;
                    echo "<tr> <td>$arg</td> <td>$valeur</td></tr>";
                   
                }
             ?>
                
             </tbody>
            </table>

    </body>

</html>