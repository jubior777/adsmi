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





//////////////// ACTUALIZAR DATOS //////////////










function pedirDatosCompras(idempleado){
	//donde se mostrar� el formulario con los datos
	divFormulario = document.getElementById('formulario');
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	ajax.open("POST", "consulta_por_idaaaa2.php");
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







              









































