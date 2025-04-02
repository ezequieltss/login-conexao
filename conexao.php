<?php
 
$usuario = 'root';
$senha = '';
$database = 'usuarios';
$host = 'localhost';

$maysqli = new maysqli($host,$usuario,$senha,$database)

if($maysqli-> connect_error){
    die("falha ao conectar ao banco de dados". $maysqli->connector_error);
    
}
?>