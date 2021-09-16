// Este sleep lo implementé únicamente para agregarle un poco de estetica al ejemplo.

function sleep(ms){
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function dormir() {
  await sleep(8000);
}

$(document).ready(function(){
  $('#updateProduct').submit(function(event){

    $('#campos').hide();
    event.preventDefault(); // Evitando la acción por defecto del navegador
    dormir();      // Este llamado no es necesario, es un sleep de 8 segundos.

    $.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			timeout: 10000
		})
      location.reload();
   });
});
