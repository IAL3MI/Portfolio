<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dadosimc</title>
</head>
<body>
    <?php   

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / $altura ** 2;

    echo $imc;
    header("Location: imc.php?res=$imc&peso=$peso&altura=$altura");

    ?>
</body>
</html>