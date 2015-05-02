<?php

//CONSTANTES
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'all1234');
define('BD', 'aula_php');

try{
    $dsn ="mysql:host=".HOST.";dbname=".BD;
    $conexao = new PDO($dsn, USUARIO, SENHA);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conecção Ok";
} catch (PDOException $ex) {
    echo "Erro ao conectar com o banco ".$e->getMessage();
}