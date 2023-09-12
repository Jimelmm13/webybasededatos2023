$(document).ready(function (){
    var animal1="";
    var animal=false;
    var animal2="";
    var total_pares=0;
    $('img').click(function(e){
        var estado= $(this).attr('data-estado')
        var nombre_imagen= $(this).attr('data-id')


        if(estado=="0"){
            if(animal1!= ""&& animal2!=""){
                console.log("las cartas son diferentes")
                if(animal1.attr('data-id')!=animal1.attr('data-id')){
                    console.log("tapa cartas diferentes")
                    animal1.attr('src', 'imagenes/tapadas.jpg')
                    animal2.attr('src', 'imagenes/tapadas.jpg')
                }else{
                    console.log("las cartas son pares")
                    animal1.attr('data-estado', '1')
                    animal2.attr('data-estado', '1')
                    par=false
                }
                animal1=""
                animal2=""
            }
            console.log("estado de la carta: " + estado)
            if(animal1==""){
                animal1=$(this);
                animal1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("se asigno par #1");
                console.log(nombre_imagen)
            }else{
                animal1=$(this);
                animal1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("se asigno par #2");
            }
        }
        if(animal1="" && animal2 != ""){
            if(animal1.attr('data-id')==animal2.attr('data-id')){
                par = true
                total_pares++
                $("#total_pares").html(total_pares)
            }
        }
        
        if(total_pares == 8){
            $('img').each(function (){
                $(this).attr('src', 'imagenes/tapadas.jpg')
                $(this).attr('data-estado', '0')
            });
            total_pares=0
            par=false
            animal=""
            animal2=""
            return;
        }

    });
});