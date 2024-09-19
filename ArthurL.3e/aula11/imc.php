<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra seu IMC</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cálculo de IMC</h1>
    <p>Opa! Seja bem-vindo ao nosso site que consegue calcular seu imc de forma simples e rápida! <br>
        Para descobrir, basta preencher os campos abaixo com seu peso e sua altura. <br>
        Também temos uma tabela com as classificações gerais de cada IMC.
    </p> 

    <table>
    <form action="dadosimc.php" method="post">
        <tr>
            <td><label for="peso">Digite seu peso:</label></td>
            <td><input type="text" name="peso" class="peso" value="<?php echo (isset($_GET["peso"])?$_GET["peso"]:"");?>"></td>
        </tr>
        <tr>
            <td><label for="altura" name >Digite sua altura:</label></td>
            <td><input type="text" name="altura" class="altura" value="<?php echo (isset($_GET["altura"])?$_GET["altura"]:"");?>"></td>
        </tr>
    </table>
    IMC: <input type="text" width="5" class="imc" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>">



    </form>
    <br>
    <table class="table2">
        <tr>
            <th>IMC</th>
            <th>Classificação</th>
        </tr>
        <tr>
            <td>Menor que 18,5</td>
            <td>Magreza</td>
        </tr>
        <tr>
            <td>Entre 18,5 e 24,9</td>
            <td>Normal</td>
        </tr>
        <tr>
            <td>Entre 25 e 29,9</td>
            <td>Sobrepeso</td>
        </tr>
        <tr>
            <td>30 a 34,9</td>
            <td>Obesidade Grau 1</td>
        </tr>
        <tr>
            <td>35 a 39,9</th>
            <td>Obesidade Grau 2</td>
        </tr>
        <tr>
            <td>Maior que 40</td>
            <td>Obesidade Grau 3</td>
        </tr>
    </table>
    <footer>
        Aluno: Ronaldo Cesar <br>
        Série: 3° Ano E
    </footer>
</body>
</html>