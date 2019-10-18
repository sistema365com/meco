<?php 
// $objGenerico= new Generico();
// $configu= $objGenerico->verConfig();
// color: #7200C9
date_default_timezone_set("America/Argentina/Buenos_Aires");
$horaHoy= date("H:i:s");
$fechaHoy= date("Y-m-d");
$fechaAyer= date("Y-m-d",strtotime('-1 day',strtotime($fechaHoy)));
$anoHoy= date("Y");
$mesHoy= date("m");
$mesProx= date("m",strtotime('1 month',strtotime($fechaHoy)));
$diaHoy= date("d");

$templates= 'hf2';
$permisosNom = array(
        '1' => 'Root', 
        '2' => 'Administrador', 
        '3' => 'Gestionar Preguntas',
        '4' => 'Gestionar Ordenes',
        '5' => 'Gestionar Publicaciones',
        '6' => 'Ver Informes y MercadoPago',
        );
$permisosVal = array(
        '0001' => '0001', 
        '0002' => '0002', 
        '0003' => '0003', 
        );

$estadoProv = array(
        '0' => '<span class="label label-warning">No publicado</span>', 
        '1' => '<span class="label label-success">Publicado</span>', 
        '2' => '<span class="label label-danger">Rechazado</span>', 
        '3' => '<span class="label label-primary">Pausado</span>',
        '4' => '<span class="label label-danger">Finalizado</span>',
        );
$labelEstado = array(
        '0' => 'warning', 
        '1' => 'success', 
        '2' => 'danger', 
        '3' => 'primary',
        '4' => 'danger',
        );
// $estadoProv = array(
//         '0' => '<span class="pendiente">No publicado</span>', 
//         '1' => '<span class="disponible">Publicado</span>', 
//         '2' => '<span class="conflicto">Rechazado</span>', 
//         '3' => '<span class="pendiente">Pausado</span>',
//         '4' => '<span class="conflicto">Finalizado</span>',
//         );


        // notas
        const ID = 'id';
        const FECHA = 'fechacarga';
        const TITULO = 'titulo';
        const CONTENIDO = 'contenido';
        const IMG = 'imagen';
        const KEY = 'tags';
        const CATE1 = 'categoria1';
        const CATE2 = 'categoria2';
        const CATE3 = 'categoria3';
        const DATOEXT1 = 'datoExt1';
        const DATOEXT2 = 'datoExt2';
        const DATOEXT3 = 'datoExt3';
        const DATOEXT4 = 'datoExt4';

        // usuarios
        const USERID = 'id_admin';
        const USER = 'user_id';
        const PASS = 'pass';
        const NOMBRE = 'nombre';
        const APELLIDO = 'apellido';
        const EMAIL = 'email';
        const TELEFONO = 'telefono';
        const PERMISOS = 'permisos';
        // usuarios como se ve en el FRONT****************
        const NOMUSERID = 'id_admin';
        const NOMUSER = 'Usuario';
        const NOMPASS = 'Contraseña';
        const NOMNOMBRE = 'Nombre';
        const NOMAPELLIDO = 'Apellido';
        const NOMEMAIL = 'Correo Eléctronico';
        const NOMTELEFONO = 'Fecha de nacimiento';
        const NOMPERMISOS = 'Permisos de usuarios';


 ?>