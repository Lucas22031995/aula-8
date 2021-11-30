<?php


$servidor   = "localhost";
$usuario    = "root";
$senha  = "";
$bd = "bdcurso";


try {
    $con = new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$senha);

    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao Banco de Dados";


} catch (PDOException $e){

    echo "Deu ruim:".$e->getMessage();


}



 
