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

        <form method="post">

            <!--  username input -->
            <label for="username"> Username </label>
            <input type="text" name="username" required>

             <!--  password input -->
            <label for="password"> Password </label>
            <input type="text" name="password" required>

             <input type="submit">

        </form>
        <?php
            if (isset($_POST["username"]) && isset($_POST["password"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
            
                if ($username == "John" && $password == "Rambo") {
                    echo "C’est pas ma guerre";
                } else {
                    echo "Votre pire cauchemar";
                }

            }
                
        ?>

    </body>

</html>