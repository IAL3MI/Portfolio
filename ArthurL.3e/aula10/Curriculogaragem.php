<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    $nome = $_POST["nome"];
    echo "Nome Completo: ", $nome,"<br>";

    $data = $_POST["data"];
    echo "Data de Nascimento: ", $data,"<br>";

    $sexo = $_POST["sexo"];
    echo "Sexo: ", $sexo,"<br>";

    $es = $_POST["es"];
    echo "Estado Civil: ", $es,"<br>";

    $naci = $_POST["naci"];
    echo "Nacionalidade: ", $naci,"<br>";

    $rg = $_POST["rg"];
    echo "RG: ", $rg,"<br>";

    $cpf = $_POST["cpf"];
    echo "CPF: ", $cpf,"<br>";

    $log = $_POST["log"];
    echo "Logadouro: ", $log,"<br>";

    $num = $_POST["num"];
    echo "Número: ", $num,"<br>";

    $cpmpl = $_POST["cpmpl"];
    echo "Complemento: ", $cpmpl,"<br>";

    $hood = $_POST["hood"];
    echo "Bairro: ", $hood,"<br>";

    $state = $_POST["state"];
    echo "Estado: ", $state,"<br>";

    $city = $_POST["city"];
    echo "Cidade: ", $city,"<br>";

    $cep = $_POST["cep"];
    echo "CEP: ", $cep,"<br>";

    $cell = $_POST["cell"];
    echo "Telefone de Contato: ", $cell,"<br>";

    $mail = $_POST["mail"];
    echo "E-mail:", $mail,"<br>";




    
    

    ?>
</body>
</html>
