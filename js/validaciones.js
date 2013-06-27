
var numero=(window.event)?true:false;
function solonumeros(evento){
	var numero=(window.event)?true:false;

var key=numero?evento.which:evento.keycode;
return(key<=13||(key>=48&& key<=57));
}


function sololetras(){ 
	if (event.keyCode >45 && event.keyCode  <57)
	event.returnValue = false; 
}	
	function validarFormulario(){
	var formulario = document.formulario;
	
			// valida nombre //
	if( soloLetras(formulario.nombre.value) == false){  //obtiene el valor falso   
		alert('Solo letras por favor');
		formulario.nombre.focus();
		return false;
	}
	if(formulario.nombre.value == ""){ // obtiene el valor vacio
		alert("debe ingresar su nombre");
		formulario.nombre.focus();
		return false;
	}
	
	// validar telefono
	
	function validarSiNumero(telefono){ 
    if (!/^([0-9])*$/.test(telefono)) 
      alert("No existe el telefono ingresado"); 
	
	

   // validar imprimir
	function imprimir(){
	if(window.print)
		window.print()
	else 
		alert("disculpe, su navegador no soporta esta opcion");
}
	
	//valida apellido //
	if(soloLetras(formulario.apellido.value) == false){
		alert("por favor ingrese su apellido");
		formulario.apellido.focus();
		return;
	}
	if(formulario.apellido.value == ""){
		alert('debe ingresar su segundo apellido');
		formulario.apellidoDos.focus();
		return false;
		
	 // valida la edad //
	 
	 	edad = document.formulario.edad.value 
    edad = validarEntero(edad) 
    document.formulario.edad.value=edad 
    if (edad==""){ 
       alert("Tiene que introducir un número entero en su edad.") 
       document.fvalida.edad.focus() 
       return 0; 
    }
			else{ 
       if (edad<18){ 
          alert("Debe ser mayor de 18 años.") 
          document.fvalida.edad.focus() 
          return 0; 
      } 
    } 
		
		// validar el Email
		
		if (formulario.email.value==""){
			alert("por favor ingrese su dirección de e-mail");
			formulario.email.focus();
			return;
		}
		
		if(formulario.email.value.indexOf('@',0)==-1 ||
				formulario.email.value.indexOf(',',0)==-1){
			alert("Dirección de e-mail inválida");
			formulario.email.focus();
			return;
		}
		formulario.submit();
	}
		
		
		

