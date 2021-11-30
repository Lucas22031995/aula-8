<?php // conexão procedural

//criar variaveis de conexão


$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd  = "bdcurso";


//criar conexão
//msqli_connect (hostname, user , pasword , db);
// o mysqli_conect retorna true ou false
 

$con = mysqli_connect($servidor,$usuario,$senha,$bd);



if ($con){ // verifica se a $con tem true 
    echo "Conectou ao Banco de Dados";

} else{
    echo "Falha ao tentar conectar ao Banco de Dados";


}