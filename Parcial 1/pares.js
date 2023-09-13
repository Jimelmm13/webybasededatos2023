$(document).ready(function (){
    var animal1="";
    var animal=false;
    var animal2="";
    var total_pares=0;
    var total_intentos = 0;
    $('img').click(function(e){
        var estado= $(this).attr('data-estado')
        var nombre_imagen= $(this).attr('data-id')


        if(estado=="0"){
            if(animal1!= "" && animal2 != ""){
                console.log("las cartas son diferentes")
                if(animal1.attr('data-id') != animal2.attr('data-id')){
                    console.log("tapa cartas diferentes")
                    animal1.attr('src', 'imagenes/tapadas.jpg')
                    animal2.attr('src', 'imagenes/tapadas.jpg')
                } else {
                    console.log("las cartas son iguales")
                    animal1.attr('data-estado', '1')
                    animal2.attr('data-estado', '1')
                    par=false
                }
                animal1=""
                animal2=""
            }

            console.log("Estado de la carta: " + estado)
            if(animal1 == ""){
                animal1= $(this);
                animal1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("se asigno par #1");
            }else if(animal2 == "") {
                animal2=$(this);
                animal2.attr('src', 'imagenes/' + nombre_imagen)
                console.log("se asigno par #2");
            }
        }

        if(animal1 != "" && animal2 != ""){
            if(animal1.attr('data-id') == animal2.attr('data-id')){
                par = true
                total_pares++
                $("#total_pares").html(total_pares)
            } else {
                total_intentos++
            }
        }

        if(total_intentos >= 5){
            alert("Excediste el numero de intentos permitidos")
            alert("Has perdido el juego =(, vuelve a intentar de nuevo")
            $('img').each(function (){
                $(this).attr('src', 'imagenes/tapadas.jpg')
                $(this).attr('data-estado', '0')
            });
            total_pares=0
            total_intentos=0
            $("#total_pares").html(total_pares)
            par=false
            animal1=""
            animal2=""
            return;
        }

        if(total_pares == 8){
            alert("Felicidades, has ganado el juego")
            $('img').each(function (){
                $(this).attr('src', 'imagenes/tapadas.jpg')
                $(this).attr("data-estado", '0')
            });
            total_pares=0
            total_intentos=0
            $("#total_pares").html(total_pares)
            par=false
            animal1=""
            animal2=""
            return;
        }
    });
});