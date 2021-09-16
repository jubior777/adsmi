function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}


function insertarPedidoLlevar(idproducto, iduser){
    divResultado = document.getElementById('resultado');
    ajax=objetoAjax();
    ajax.open("GET", "InsertarPedidoLlevar.php?idproducto=" + idproducto + "&iduser=" + iduser);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send()
}


function insertarPedidoMesa(idproducto, iduser){
    divResultado = document.getElementById('resultado');
    ajax=objetoAjax();
    ajax.open("GET", "InsertarPedidoMesa.php?idproducto=" + idproducto + "&iduser=" + iduser);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send()
}

function deleteOnlyProducto(idproducto, tipo,idUser){
    divResultado = document.getElementById('resultado');
    ajax=objetoAjax();
    ajax.open("GET", "DeleteOnlyPreVenta.php?idProducto=" + idproducto + "&tipo=" + tipo+ "&idUser=" + idUser);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send()
}

function deleteAllPreventa(idUser){
    divResultado = document.getElementById('resultado');
    ajax=objetoAjax();
    ajax.open("GET", "DeleteAllPreVenta.php?idUser=" + idUser);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.send()
}

function editarPreventa(idproducto, tipo, idUser) {
    divFormulario = document.getElementById('formularioEdit');
    ajax = objetoAjax();
    ajax.open("POST", "EditPreventa.php");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            divFormulario.innerHTML = ajax.responseText
            divFormulario.style.display = "block";
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("idProducto=" +idproducto  + "&tipo=" + tipo + "&idUser=" + idUser)
  }


