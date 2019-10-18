	function arrojarError(leyenda,idElem)
	{
		alert(leyenda);
		document.getElementById(idElem).style.backgroundColor = 'red';
		document.getElementById(idElem).style.color = 'white';
		document.getElementById(idElem).focus();
	}

	function limpiarCaja(idElem)
	{
		document.getElementById(idElem).style.backgroundColor = 'white';
		document.getElementById(idElem).style.color = 'black';
	}
	function validarDatos()
	{
		var dato1 =document.getElementById('dato1').value;
		var dato2 =document.getElementById('dato2').value;
		var dato3 =document.getElementById('dato3').value;
		var dato4 =document.getElementById('dato4').value;
		var dato4 =document.getElementById('dato4').value;
		var dato7 =document.getElementById('dato7').value;

		if (dato1 == '') 
			{
				arrojarError('Campo obligatorio','dato1');
				return false;
			}
		if (dato2 == '') 
			{
				arrojarError('Campo obligatorio','dato4');
				return false;
			}
		// if (dato3.length <8) 
		// 	{
		// 		arrojarError('no pueden ser menos de 8 caracteres','dato3');
		// 		return false;
		// 	}


	}
	function elige()
	{
		var dato1 =document.getElementById('dato3').value;
		if (dato1==0) {
			document.getElementById('submit').innerHTML= 'Completar Campo "¿Como nos conociste?"';
			document.getElementById('submit').setAttribute('disabled','true');
		}
		else {
			document.getElementById('submit').innerHTML= '<i class="fa fa-paper-plane"></i>Enviar consulta';
			document.getElementById('submit').removeAttribute('disabled','true');
		}
	}
	function elige2()
	{
		var dato1 =document.getElementById('dato3').value;
		if (dato1==0) {
			document.getElementById('btn-carrito-consulta').innerHTML= 'Completar Campo "¿Como nos conociste?"';
			document.getElementById('btn-carrito-consulta').setAttribute('disabled','true');
		}
		else {
			document.getElementById('btn-carrito-consulta').innerHTML= '<i class="fa fa-paper-plane"></i>Enviar consulta';
			document.getElementById('btn-carrito-consulta').removeAttribute('disabled','true');
		}
	}
	function validarDatos2()
	{
		var dato1 =document.getElementById('dato1').value;
		var dato2 =document.getElementById('dato2').value;
		var dato3 =document.getElementById('dato3').value;
		var dato4 =document.getElementById('dato4').value;
		var dato4 =document.getElementById('dato4').value;
		var dato7 =document.getElementById('dato7').value;

		if (dato1 == '') 
			{
				arrojarError('Campo obligatorio','dato1');
				return false;
			}
		if (dato2 == '') 
			{
				arrojarError('Campo obligatorio','dato2');
				return false;
			}
		if (dato4 == '') 
			{
				arrojarError('Campo obligatorio','dato4');
				return false;
			}
		if (dato7 == '') 
			{
				arrojarError('Campo obligatorio','dato7');
				return false;
			}

	}


	// antes de aca validamos el formulario

	function validaEmail() {
		var email= document.getElementById('email').value;
	    expr = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
	    if ( !expr.test(email) ) {
		document.getElementById('impriEmail').innerHTML = ' Dirección invalida'; 
		document.getElementById('impriEmail').style= 'color:red';
		}
		else {
		document.getElementById('impriEmail').innerHTML = ' Dirección correcta'; 
		document.getElementById('impriEmail').style= 'color:green';
		}
	}
	function comparaPass(){
		var pass1= document.getElementById('pass').value;
		var pass2= document.getElementById('pass2').value;
		if (pass1 != pass2) {
		document.getElementById('imprimeComparacion').innerHTML = ' Las contraseñas deben ser iguales'; 
		document.getElementById('imprimeComparacion').style= 'color:red';
		}
		else {
		document.getElementById('imprimeComparacion').innerHTML = '';            
		}
	}
	function seguridad_clave(){
		var p= document.getElementById('pass').value;
		l = 0;
		v1 = 'aeiou1234567890';
		v2 = 'AEIOUbcdfghjklmnpqrst';
		v3 = 'vxyzBCDFGHJKLMNPQRST';
		v4 = 'VXYZ$@#';
		for (i = 0; i < p.length; i++){
		if (v1.indexOf(p[i]) != -1) l += 2;
		else if (v2.indexOf(p[i]) != -1) l += 3;
		else if (v3.indexOf(p[i]) != -1) l += 4;
		else if (v4.indexOf(p[i]) != -1) l += 5;
		else l += 6;
		}
		l *= 3;
		if(l > 100) {l = 100;}
		if (l > 87) {
		document.getElementById('imprimeSeg').style= 'color:green';
		}
		if (l>50 && l< 87) {
		document.getElementById('imprimeSeg').style= 'color:yellow';
		}
		if (l< 50) {
		document.getElementById('imprimeSeg').style= 'color:red';
		}
		document.getElementById('imprimeSeg').innerHTML = ' Seguridad: '+l+'%';            
	}   

// fin valida contraseña
	function validaCuit(cuit) 
	{ 
	    if(cuit.length != 11) {
            return false;
        }
 
        var acumulado   = 0;
        var digitos     = cuit.split("");
        var digito      = digitos.pop();
 
        for(var i = 0; i < digitos.length; i++) {
            acumulado += digitos[9 - i] * (2 + (i % 6));
        }
 
        var verif = 11 - (acumulado % 11);
        if(verif == 11) {
            verif = 0;
        } else if(verif == 10) {
            verif = 9;
        }
 
        return digito == verif;
	}
	function validarCUIT(){
		var tomoCuit = document.getElementById('cuit').value;
		if (tomoCuit.length==11) {
		if (!validaCuit(tomoCuit)) 
		{
			document.getElementById("mensajeCUIT").innerHTML = 'CUIT incorrecto';
			document.getElementById('cuit').setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			document.getElementById('mensajeCUIT').setAttribute('style','color:red');
			return false;

		}
		if (validaCuit(tomoCuit)) 
		{
			document.getElementById("mensajeCUIT").innerHTML = 'CUIT correcto';
			document.getElementById('cuit').setAttribute('style','background-color:white');
			document.getElementById('mensajeCUIT').setAttribute('style','color:green');
		}
		}
		
	}
	function maxCaracteresKey(max,dato){
		var imprime= document.getElementById('dato'+dato).value;
		var largo = imprime.length;
		var res= max - largo;
		if (res < 0) 
			{
				document.getElementById("impri"+dato).innerHTML = ' Caracteres restantes: '+ res;
				document.getElementById('dato'+dato).setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			};
		if (res > 0)
			{
				document.getElementById('dato'+dato).setAttribute('style','background-color:black');
				document.getElementById("impri"+dato).innerHTML = '';
			};
		if (imprime == '') 
			{
				document.getElementById("impri"+dato).innerHTML = ' Campo Obligatorio';
				document.getElementById('dato'+dato).setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			};
	}
	function maxCaracteres(max,dato){
		var imprime= document.getElementById('dato'+dato).value;
		var largo = imprime.length;
		var res= max - largo;
		if (res < 0) 
			{
				document.getElementById("impri"+dato).innerHTML = ' Caracteres restantes: '+ res;
				document.getElementById('dato'+dato).setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			};
		if (res > 0)
			{
				document.getElementById('dato'+dato).removeAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
				document.getElementById("impri"+dato).innerHTML = '';
			};
		if (imprime == '') 
			{
				document.getElementById("impri"+dato).innerHTML = ' Campo Obligatorio';
				document.getElementById('dato'+dato).setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			};
	}
	function esNumero(dato){
		var imprime= document.getElementById('dato'+dato).value;
		if (isNaN(imprime)) 
			{
				document.getElementById("impri"+dato).innerHTML = 'Debe ser un número';
				document.getElementById("impri"+dato).setAttribute('style','color:red');
				document.getElementById('dato'+dato).setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			}
		else
			{
				document.getElementById('dato'+dato).setAttribute('style','background-color:white');
				document.getElementById("impri"+dato).innerHTML = '';
			}
	}
	function campoVacio(dato){
		var imprime= document.getElementById('dato'+dato).value;
		if (imprime == '') 
			{
				document.getElementById("impri"+dato).innerHTML = 'Campo Obligatorio';
				document.getElementById("impri"+dato).setAttribute('style','color:red');
				document.getElementById('dato'+dato).setAttribute('style','background-color:rgba(248, 57, 82, 0.78)');
			};
		if (imprime != '')
			{
				document.getElementById('dato'+dato).setAttribute('style','background-color:white');
				document.getElementById("impri"+dato).innerHTML = '';
			};
	}

