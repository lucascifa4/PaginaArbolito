$(document).ready(function(){
  var boton = $('#btn-votar')

  boton.on('click', function(){
    var seleccionado = $('.carousel-item.active');
    var id = seleccionado.attr('id');
    var inputHidden = $('#voto').val(id);
    console.log("ID del botón:", id);
    })
})

document.addEventListener("DOMContentLoaded", function() {

  if ($usuario) {
    document.getElementById('mail').style.display = 'block';
  }
});