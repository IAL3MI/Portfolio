<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }


    </style>
</head>
<body>
    
    <?php 
    // for([Valor inicial da variavel]; [Valor que a variavel deve alcançar]; [Incremento à variavel])
    echo "<h1>Contando de 1 a 10 em php</h1>";

    for($x=1; $x<=10; $x++){
        echo "$x <br>";
    };

    echo"<h1>Tabela de 1 a 10 em PHP <h1>";

    echo "<table><tr>";
    for($x=1; $x<=10; $x++){
        echo "<td>$x </td>";
    };
    echo"</tr></table>";
    
  
    ?>
</body>
</html>
