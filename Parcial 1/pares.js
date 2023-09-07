$(document).ready(function () {
    var carta1 = ""; var carta2 = "";
    var par = false;
    var total_pares = 0;
    $('img').click(function (e) {
        var estado = $(this).attr('data-estado')
        var nombre_imagen = $(this).attr('data-id')

        if(estado == "0"){
            console.log("Estado de la carta: " + estado)
            if(carta1 == ""){
                carta1 = $(this);
                carta1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("Se asigno carta #1")
            } else {
                carta2 = $(this);
                carta2.attr('src', 'imagenes/' + nombre_imagen)
                console.log("Se asigno carta #2")
            }
        }

        if(carta1 !="" && carta2 !=""){
            if(carta1.attr('data-id')==carta2.attr('data-id')){
                par = true
                total_pares++
                $("#total_pares").html(total_pares)
                carta1="";
                carta2="";
            }
        }
    });
});