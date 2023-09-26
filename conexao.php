<?php

$host = 'host:port';
//or add $port
$dbname= 'db name';
$username= 'user';
$password= 'password';

try{
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $exception){
    echo("Erro na conexão: " . $exception->getMessage());
}
