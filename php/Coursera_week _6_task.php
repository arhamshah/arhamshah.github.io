<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arham</title>
</head>
<body>
    <h1>Welcome to guessing game!!</h1>
    <pre><?php
            $val = 45;  
            if(!isset($_GET["guess"]))
                echo "Missing guess parameter";
            elseif(!is_numeric($_GET["guess"]))
                echo "Your guess is not a number";
            elseif($_GET["guess"]<$val)
                echo "Your guess is too low";
            elseif($_GET["guess"]>$val)
                echo "Your guess is too high";
            elseif($_GET["guess"]==$val)
                echo "Congratulations - You are right";
            elseif(empty( $_GET["guess"]))
                echo "Your guess is too short";
            else
                echo "Error occurred";
        ?></pre>
</body>
</html>
