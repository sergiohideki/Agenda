<?php

$host = "localhost";
$db = "O nome do banco";
$user = "Seu usuário no banco";
$pass = "Sua senha";

try {

    $conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

    //ativa o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //erro na conexâo
    $error = $e->getMessage();
    echo "erro: $error";
}
