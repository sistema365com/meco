<?php 
$verConfigu= Configuracion::verConfigu();
$mensajesAutomaticos= explode(';', $verConfigu['mensajesAutomaticos']);
$objPlantilla= new Plantilla();
$verPlantilla= $objPlantilla->verPlantillaGeneral($_SESSION['empresa']);

if ($verPlantilla[0]['texto']=='') {
    $valueSaludo= 'Hola @USUARIO, gracias por Contactarnos,';
}
else{
    $valueSaludo= $verPlantilla[0]['texto'];
}
if ($verPlantilla[1]['texto']=='') {
    $valueFirma= 'Saludos ('.ucwords($siteML['userML']).')';
}
else{
    $valueFirma= $verPlantilla[1]['texto'];
}

 ?>

<div class="row">
<form name="form_id" action="moduloML/plantillas/ac.plantillaGeneral.php" method="post">
<input type="hidden" name="editar" value="1">
    <div class="col-lg-6">
        <h4>Saludo Inicial</h4>
            <input type="checkbox" name="termin1" value="1" onclick="marcado1();"> Habilitar Saludo inicial 
            <br>
            <input id="dis1" disabled="true" type="text" name="saludoInicial" class="form-control" value="<?php echo $valueSaludo; ?>">
            <small>Deje '@USUARIO' donde quiera colocar el nombre del Comprador</small>
    </div>
    <div class="col-lg-6">
        <h4>Firma</h4>
            <input type="checkbox" name="termin2" value="1" onclick="marcado2();"> Habilitar Firma<br>
            <input id="dis2" disabled="true" type="text" name="firma" class="form-control" value="<?php echo $valueFirma; ?>">
    </div>
<div class="col-lg-12">
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Guardar</button>
    <a class="btn" href="moduloML/plantillas/ac.plantillaGeneral.php?borrar=1">Borrar Saludos</a>
</div>
</form>
</div>

<div class="row">
    <div class="col-lg-12">
    <h3>Mensajes Autom谩ticos</h3>
    <form action="moduloML/plantillas/ac.plantillas.php" method="post">
    <input type="hidden" name="configMA" value="1">
    <input type="hidden" name="empresa" value="<?php echo $_SESSION['empresa']; ?>">
        <p>
          <label style="margin-right: 5px;" for=""></label><input <?php if(in_array('yaCalificamos', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" class="switch" value="yaCalificamos" name="mensajesAutomaticos[]" data-on-text="ON" data-off-text="OFF" data-on-color="teal">
            <!-- <input <?php if(in_array('yaCalificamos', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" name="mensajesAutomaticos[]" value="yaCalificamos"> --> 
            <b>Enviaste Calificaci贸n:</b> Al calificar Positivamente una venta, podes enviarle al comprador un mensaje avisandole que ya lo calificaste. <br>
            <i style="font-size: 12px;"><b>Mensaje a enviar:</b> Esperamos que disfrutes el producto, ya te calificamos por tu compra, aguardamos tu calificaci贸n!</i> 
        </p>
<!--         <p>
            <input <?php if(in_array('pagoRealizado', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" name="mensajesAutomaticos[]" value="pagoRealizado"> <b>Pago realizado:</b> Informa a tu comprador que recibiste correctamente su pago. <br>
            <i style="font-size: 12px;"><b>Mensaje a enviar:</b> Gracias por realizar tu pago, se acredito correctamente!</i> 
        </p> -->
        <p>
          <label style="margin-right: 5px;" for=""></label><input <?php if(in_array('enCamino', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" class="switch" value="enCamino" name="mensajesAutomaticos[]" data-on-text="ON" data-off-text="OFF" data-on-color="teal">
            <!-- <input <?php if(in_array('enCamino', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" name="mensajesAutomaticos[]" value="enCamino"> --> 
            <b>Envio en camino:</b> Informa a tu comprador que su pedido ya esta despachado. <br>
            <i style="font-size: 12px;"><b>Mensaje a enviar:</b> Tu pedido ya esta en camino!</i> 
        </p>
        <p>
          <label style="margin-right: 5px;" for=""></label><input <?php if(in_array('entregado', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" class="switch" value="entregado" name="mensajesAutomaticos[]" data-on-text="ON" data-off-text="OFF" data-on-color="teal">
            <!-- <input <?php if(in_array('entregado', $mensajesAutomaticos)){echo "checked";} ?> type="checkbox" name="mensajesAutomaticos[]" value="entregado"> --> 
            <b>Envio entregado:</b> Informa a tu comprador que su pedido ya esta entregado. <br>
            <i style="font-size: 12px;"><b>Mensaje a enviar:</b> Tu producto ya fue entregado, esperamos que lo disfrutes, no olvides calificarnos! ¿tenes dudas? consultanos por mensaje en esta misma ventana!</i> 
        </p>
        <button class="btn btn-warning"><i class="fa fa-save"></i> Guardar</button>



    </form>
    </div>
</div>









<script type="text/javascript">
    function marcado1(){
        if (document.form_id.termin1.checked) {
            document.getElementById('dis1').removeAttribute('disabled', 'true');
        }
        else{
            document.getElementById('dis1').setAttribute('disabled', 'true');
        }
    }
    function marcado2(){
        if (document.form_id.termin2.checked) {
            document.getElementById('dis2').removeAttribute('disabled', 'true');
        }
        else{
            document.getElementById('dis2').setAttribute('disabled', 'true');
        }
    }

</script>