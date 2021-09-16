//Desarrollado por Jesus Li��n
//webmaster@ribosomatic.com
//ribosomatic.com
//Puedes hacer lo que quieras con el c�digo
//pero visita la web cuando te acuerdes

function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}






function insertarDato(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
   //    var eliminar = confirm("Estoy aqu� ")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "insercionPro.php?idproducto="+idproducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}





   
}









function insertarDatob(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
        var eliminar = confirm("Estoy aqu� ")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "insercionProb.php?idproducto="+idproducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}



























function insertarDatoPlus(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
   //    var eliminar = confirm("Estoy aqu� ")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "plus.php?idproducto="+idproducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}







function insertarDatoMinus(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
   //    var eliminar = confirm("Estoy aqu� ")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "minus.php?idproducto="+idproducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}


function deleteDatoP(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
     //  var eliminar = confirm("Estoy aqu� ")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "delete.php?idproducto="+idproducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}



function deleteDatoPP(idUser){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open("GET", "DeleteALlPreVenta.php?idUser="+idUser);
	location.reload();
	ajax.onreadystatechange=function() {
		// TODO revisar esto porque el estado es 4 no 1
		// if (ajax.readyState==4) {
		if (ajax.readyState==1) {
			//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}



































function enviarDatosCliente(){
	//donde se mostrar� lo resultados
	divResultado = document.getElementById('resultado');
	//valores de los inputs
	nom=document.nuevo_empleado.nombre.value;
	ci=document.nuevo_empleado.ci.value;
	monto=document.nuevo_empleado.monto.value;

	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod POST
	//archivo que realizar� la operacion
	//registro.php
	ajax.open("POST", "registro.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText
			//llamar a funcion para limpiar los inputs
			LimpiarCampos();
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("nombre="+nom+"&ci="+ci+"&monto="+monto)
}








function LimpiarCampos(){
    document.nuevo_empleado.monto.value="";
    document.nuevo_empleado.nombre.value="";
    document.nuevo_empleado.ci.value="";
   	document.nuevo_empleado.monto.focus();
}







function nuevo(idproductos){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  //	var eliminar = confirm("De verdad desea eliminar este dato?")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
 // ajax.open("GET", "insertarVenta.php?nuevo="+idproductos);

   ajax.open("GET", "nuevo.php?nuevo="+idproductos);
       ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}






		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}




function cancelar(idproductod){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  //	var eliminar = confirm("De verdad desea eliminar este dato?")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "cancelar.php?nuevosd="+idproductod);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}



// El ultimo registro
function cancelar2(idproductodd){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  //	var eliminar = confirm("De verdad desea eliminar este dato?")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "cancelar2.php?nuevosd="+idproductodd);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}










function limpiar(idproductode){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  //	var eliminar = confirm("De verdad desea eliminar este dato?")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "cancelar.php?nuevos="+idproductode);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}

function eliminarDato(nombreProducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  //	var eliminar = confirm("De verdad desea eliminar este dato?")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "eliminarPro.php?nombreProducto="+nombreProducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}


           function insertarDatoL(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  //	var eliminar = confirm("De verdad desea eliminar este dato?")
  //	var eliminar =confirm("")
  //	if ( eliminar ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "insercionProL.php?idproducto="+idproducto);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   //	}
}

function enviarDatosUsuario(){
	//donde se mostrar� lo resultados
	divResultado = document.getElementById('resultados');
	//valores de los inputs
	nomb=document.nuevo_usuario.nombreU.value;
	apell=document.nuevo_usuario.apellidos.value;
	usua=document.nuevo_usuario.usuario.value;
    pasw=document.nuevo_usuario.pasword.value;
	tip=document.nuevo_usuario.tipo.value;

	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod POST
	//archivo que realizar� la operacion
	//registro.php
	ajax.open("POST", "registroU.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText
			//llamar a funcion para limpiar los inputs
			LimpiarCamposs();
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("nombreu="+nomb+"&apellidos="+apell+"&usuario="+usua+"&pasword="+pasw+"&tipo="+tip)
}



 function LimpiarCamposs(){
	document.nuevo_usuario.nombreU.value="";
	document.nuevo_usuario.apellidos.value="";
	document.nuevo_usuario.usuario.value="";

    document.nuevo_usuario.pasword.value="";
	document.nuevo_usuario.tipo.value="";

	document.nuevo_usuario.nombreU.focus();



}

  function nuevoDia(nuevoDia){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  	var nuevoDia = confirm("Buenos Dias Vamos a Empezar")
  	var nuevoDia =confirm("")
  	if ( nuevoDia ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "nuevoDia.php?nuevoDia="+nuevoDia);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   	}
}

    function registrarVentas(nuevoDia){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  	var nuevoDia = confirm("Se registro las ventas")
  	var nuevoDia =confirm("")
  	if ( nuevoDia ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "nuevoDia.php?nuevoDia="+nuevoDia);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   	}
}




//////////////// ACTUALIZAR DATOS //////////////



function enviarDatosCompra(){
	//donde se mostrar� lo resultados
	divResultado = document.getElementById('resultado');
	divFormulario = document.getElementById('formulario');
	//valores de los inputs
	id=document.frmempleado.idempleado.value;
	nom=document.frmempleado.nombres.value;
	dep=document.frmempleado.departamento.value;
	suel=document.frmempleado.sueldo.value;
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usando del medoto POST
	//archivo que realizar� la operacion
	//actualizacion.php
	ajax.open("POST", "actualizacion.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar los nuevos registros en esta capa
			divResultado.innerHTML = ajax.responseText
			//mostrar un mensaje de actualizacion correcta
			divFormulario.innerHTML = "<p style=\"border:1px solid red; width:400px;\">La actualizaci&oacute;n se realiz&oacute; correctamente</p>";
		}
	}
	//muy importante este encabezado ya que hacemos uso de un formulario
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("idempleado="+id+"&nombres="+nom+"&departamento="+dep+"&sueldo="+suel)
}

function pedirDatosCompraw(idempleado){
	//donde se mostrar� el formulario con los datos
	divFormulario = document.getElementById('formulario');
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	ajax.open("POST", "consulta_por_id.php");
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divFormulario.innerHTML = ajax.responseText
			//mostrar el formulario
			divFormulario.style.display="block";
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("idemp="+idempleado)
}



/////////////////// FIN DE ACTUALIZAR DATOS //////////////////////


















































function actualizarVentas(nuevoDia){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
  	var nuevoDia = confirm("Se actualizo las ventas")
  	var nuevoDia =confirm("")
  	if ( nuevoDia ) {
		//instanciamos el objetoAjax
		ajax=objetoAjax();
		//uso del medotod GET
		//indicamos el archivo que realizar� el proceso de eliminaci�n
		//junto con un valor que representa el id del empleado
		ajax.open("GET", "nuevoDia.php?nuevoDia="+nuevoDia);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
   	}
}








