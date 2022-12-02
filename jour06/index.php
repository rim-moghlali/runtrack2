<?php
    $style = 'style1';
    if (isset($_GET['style'])){
        $style = $_GET['style'];
        }

?><!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $style; ?>">
    </head>
    <body>

        <form action="" method="get" id="form" class="topBefore">   
        <select name = "style" id="style">
            <option value="style1.css"> Style 1 </option>
            <option value="style2.css"> Style 2</option>
            <option value="style3.css"> Style 3</option>
        </select>    
    
        <input id="submit" type="submit" value="Submit"!><br>
        </form>

    
    </body>
</html>