<?php
header("HTTP/1.1 200 OK");


$retorno = file_get_contents('php://input');
$archivoAnt = file_get_contents('notifica2.json');
// $archivoAnt = fopen('notifica2.json', 'w');


file_put_contents('notifica2.json',$archivoAnt.','.$retorno);

?>