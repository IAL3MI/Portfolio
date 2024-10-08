<?php
include "config.php";

if (!$conn){

    die ("Falha na conexão: " . mysqli_connect_error());
}

$nome = '';
$dtnac = '';
$celular = '';
$email = '';
$ra = '';
$endereco = '';
$num_end = '';
$bairro = '';
$cidade = '';

$sql = "INSERT INTO `leitores`
(Nome, Dtnasc, Celular, Email, RA, Endereco, NumEnd, Bairro, CidadeUF) 
VALUES('$nome','$dtnac','$celular', '$email', '$ra','$endereco','$num_end','$bairro','$cidade')";

$query = mysqli_query(mysql: $conn,query: $sql) or
die (mysqli_error(mysql:$conn));

if($query){
    echo "<center>";
    echo "Cadastro feito com sucesso! <br>";
    echo "<a href='index.php'><button title ='Home Page'>Voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "Não se preocupe, você não é o problema!<br>";
    echo "<a href='index.php'><button title ='Home Page'>Voltar</button></a>";
    echo "</center>";
}
?>