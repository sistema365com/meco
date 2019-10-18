<?php


$archivoAnt = '{"resource":"/orders/1308439385","user_id":82253270,"topic":"created_orders","application_id":3661330296299812,"attempts":1,"sent":"2017-03-03T16:14:09.779Z","received":"2017-03-03T16:14:09.755Z"}';
// $archivoAnt = fopen('notifica2.json', 'w');


file_put_contents('../form/notifica2.json',utf8_encode($archivoAnt));

?>