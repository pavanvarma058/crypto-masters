<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Conversion Results</h1>
    <?php
    $browerUA = $_SERVER["HTTP_USER_AGENT"];
        // Super global variables
    if(isset($_POST["amount"]) && isset($_POST["crypto"])){
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];

        echo  "<p>You want to convert $amount $crypto.</p>";
    }else{
        echo "<h2> Oops!, It didn't work</h2>";
    }

    ?>
</body>
</html>