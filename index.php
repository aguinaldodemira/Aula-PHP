<?php
require_once 'banco/conexao.php';

//Chamar minha conecção em uma variavel
$pdo = $conexao;

//$sql = "SELECT * FROM usuarios";
//mysql_query($sql);

try{
    $preparar = $pdo->query("SELECT * FROM usuarios");
    $listar = $preparar->fetchAll(PDO::FETCH_ASSOC);
       
    //echo "<pre>";
    //print_r($listar);
    //echo "</pre>";
    
    foreach($listar as $list):
       echo $list['nome']."<br />";
    endforeach;
            
} catch (PDOException $e) {
    echo $e->getMessage();


}

