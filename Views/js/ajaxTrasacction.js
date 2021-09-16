
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





//////////////// ACTUALIZAR DATOSss //////////////

function xyzePtasss(idproducto,tipo){
	//donde se mostrar� el formulario con los datos
	divFormulario = document.getElementById('formulario');
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	ajax.open("POST", "EditPreventass.php");
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divFormulario.innerHTML = ajax.responseText
			//mostrar el formulario
			divFormulario.style.display="block";
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("idproducto="+idproducto+"&tipo="+tipo)
}



/////////////////// ELIMINAR UNPRODUCTO DE LA PREVENTA//////////////////////

function deleteDatoProducto(idproducto){
	//donde se mostrar� el resultado de la eliminacion
	divResultado = document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open("GET", "DeleteOnlyPreVenta.php?idproducto="+idproducto);
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
	location.reload();
}


function deleteAllPreventa(idUser){
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
	location.reload();
}



function post() {

	var idproducto = $('#idproducto').val();
	var imagen = $('#imagen').val();
	var precio = $('#precio').val();
	var pventa = $('#pventa').val();
	var producto = $('#producto').val();
	var cantidad = $('#cantidad').val();
	var nuevoPrecio = $('#nuevoPrecio').val();


	$.post('../Controller/UpdatePreventa.php',{postidproducto:idproducto,postimagen:imagen,postprecio:precio,postpventa:pventa,postproducto:producto,postcantidad:cantidad,postnuevoPrecio:nuevoPrecio},
			function (data) {
				if(data=="1"){
					$('#resultData').html('tienes mas  > de 18 anios')
				}
				if(data=="0"){
					$('#resultData').html('tienes mas  < de 18 anios')
				}
			});
	   //location.reload();
	//  alert("Hello! I am an alert box!");
 }




function insertarPreventa(idproducto){
	//donde se mostrará el resultado de la eliminacion
	divResultado = document.getElementById('resultado');

	//usaremos un cuadro de confirmacion
	//    var eliminar = confirm("Estoy aquí ")
	//	var eliminar =confirm("")
	//	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "insercionPos2.php?idproducto="+idproducto);
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


/////////////////// INSERTAR NUEVO PRODUCTO MESA //////////////////////

function insertarPedidoMesa(idproducto,iduser){
	divResultado = document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open("GET", "InsertarPedidoMesa.php?idproducto="+idproducto+"&iduser="+iduser);
	location.reload();
	ajax.onreadystatechange=function() {
		// TODO revisar esto porque el estado es 4 no 1
		// if (ajax.readyState==4) {
		if (ajax.readyState==1) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	 ajax.send(null)
	//location.reload();
	window.location.reload();
}


/////////////////// INSERTAR NUEVO PRODUCTO  LLEVAR//////////////////////

function insertarPedidoLlevar(idproducto,iduser){
	divResultado = document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open("GET", "InsertarPedidoLlevar.php?idproducto="+idproducto+"&iduser="+iduser);
	location.reload();
	ajax.onreadystatechange=function() {
		// TODO revisar esto porque el estado es 4 no 1
		// if (ajax.readyState==4) {
		if (ajax.readyState==1) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
	//location.reload();
	window.location.reload();
}

              









































