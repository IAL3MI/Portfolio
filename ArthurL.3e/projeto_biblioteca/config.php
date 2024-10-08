<?php 
//Configuração de banco de dados
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "biblioteca";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name); 

if ($conn->connect_error) {

    die("Conexão Falhou:{$conn->connect_error}");
}

else {

    echo "Parabéns!!! Deu bom na conexão!";
}
?>