const boton 0 document.querySelector('#LoginView');
boton.addEventListener('submit', aplicar);

function aplicar(e){
    e.preventDefault();
    const valor = document.querySelector('nombre').nodeValue;

    if(valor ===""){
        //Mostrar alerta
        Swal.fire({
            title: 'error',
            text: 'campo es obligatorio',
            icon: 'error',
            confirmButtonText: 'confirmar'
        })
        
    }else{
        Swal.fire({
            title: '${valor}',
            text : 'Bienvenido',
            icon : 'success',
            confirmButtonText: 'confimar'
        })
        
        
    }
}