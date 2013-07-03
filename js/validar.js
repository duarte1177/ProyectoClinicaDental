function validar(){
	var estado = true;
	if (document.formulario.rut.value.length < 9){
			estado = false;
			alert("Debe completar el rut");
			document.formulario.rut.focus();
	}
	
	if (document.formulario.nombre.value == ""){
			estado = false;
			alert("Debe completar su nombre");
			document.formulario.nombre.focus();
	}
	
	if (document.formulario.apellido.value == ""){
			estado = false;
			alert("Debe completar su apellido");
			document.formulario.apellido.focus();
	}
	
	if (document.formulario.edad.value == ""){
			estado = false;
			alert("Por favor ingrese su edad");
			document.formulario.edad.focus();
	}

	 if (document.formulario.edad.value <18){ 
				alert("Debe ser mayor de 18 años.") 
				document.formulario.edad.focus() 
				estado = false;
		}  
		
	if (document.formulario.telefono.value == ""){
			estado = false;
			alert("Por favor ingrese su numero de telefono");
			document.formulario.telefono.focus();
	}
	
	if (document.formulario.email.value == ""){
			estado = false;
			alert("Por favor ingrese su dirección de e-mail");
			document.formulario.email.focus();
	}
	
	if (formulario.e-mail.indexOf('@',0)==-1 ||
			formulario.e-mail.value.indexOf('.',0) ==-1 ){
			alert("Dirección de e-mail invalida");
			formulario.e-mail.focus();
			estado = false;
	}
	
	if (document.formulario.fecha_asistencia.value == ""){
			estado = false;
			alert("Por favor ingrese la facha");
			document.formulario.fecha_asistencia.focus();
	}
	
}

function soloLetras(e) { // 1
	tecla = (document.all) ? e.keyCode : e.which; // 2
	if (tecla==8) return true; // 3
	patron =/[A-Za-z\s]/; // 4
	te = String.fromCharCode(tecla); // 5
	return patron.test(te); // 6
}

function soloNumeros(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
		patron = /\d/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function soloRut(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
		patron =/[0-9kK.-]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

// validar imprimir
function imprimir(){
	if(window.print)
		window.print()
	else 
		alert("disculpe, su navegador no soporta esta opcion");
}


	 
	 