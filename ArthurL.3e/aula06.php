<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Aula 06 php</title>
</head>
<body>
    <?php 
    echo "<h1>Arrays - Vetores</h1>";
    $carros = array('monza','santana','camaro','uno');
    echo $carros[1], "<br>";
    echo $carros[3], "<br>";

$carros[4] = "Clio";
    $carros[11] = "Versa";
    $carros[] = "Sandero";

    echo $carros[4], "<br>";
    echo $carros[5], "<br>";
    echo $carros[11], "<br>";
    echo $carros[12], "<br>";




    ?>
</body>
</html>
