<html>
    <head>
        <meta charset="utf-8">
        <title> Job 05 - jour 04 | PHP</title>
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

        <form method="get">

             <!--  nombre input -->
            <label for="nombre"> nombre </label>
            <input type="text" name="nombre" required>

             <input type="submit">

        </form>
        <?php
            if (isset($_GET["nombre"])) {
                $nombre = $_GET["nombre"];

                if ($nombre % 2 == 0) {
                    echo "Nombre pair";
                } else {
                    echo "Nombre impair";
                }

            }
                
        ?>

    </body>

</html>