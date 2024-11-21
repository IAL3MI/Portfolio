<?php
include "config.php";

if (!$conn){

    die ("Falha na conexão: " . mysqli_connect_error());
}

$nome = "$_POST[name]";
$dtnasc = "$_POST[dtnasc]";
$celular = "$_POST[celular]";
$email = "$_POST[email]";
$ra = "$_POST[ra]";
$endereco = "$_POST[endereco]";
$num_end = "$_POST[num_end]";
$bairro = "$_POST[bairro]";
$cidade = "$_POST[cidade]";

$sql = "INSERT INTO `leitores`
(Nome, Dtnasc, Celular, Email, RA, Endereco, NumEnd, Bairro, CidadeUF) 
VALUES('$nome','$dtnasc','$celular', '$email', '$ra','$endereco','$num_end','$bairro','$cidade')";

$query = mysqli_query(mysql: $conn,query: $sql) or
die (mysqli_error(mysql:$conn));

if($query){
    echo "<center>";
    echo "Cadastro feito com sucesso! <br>";
    echo "<a href='cadastrar.html'><button title ='Home Page'>Voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "Não se preocupe, você não é o problema!<br>";
    echo "<a href='index.html'><button title ='Home Page'>Voltar</button></a>";
    echo "</center>";
}
?>
