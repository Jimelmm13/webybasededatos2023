$(document).ready(function (){
    var contador=0;
    $('img').click(function(e){
        var nombre_imagen= $(this).attr('data-id')
        $(this).attr('src', 'imagenes/' + nombre_imagen);
    });
});