$(document). ready(function () {
    //alert("Funciona Jquery");
    $("#boton1"). on("click", function(){
       $("#texto1").html("Texto agregado al parrafo")

    });

    $("#texto1").hover(function (){
        $(this).css("background-color", "pink");
        $(this).css("font-size", "50px");
    }, function () {
        $(this).css("background-color", "orange");
        $(this).css("font-size", "20px");
        
        }

    );

    $("#boton2").click(function (e) {
        $("#imagen1").fadeToggle("slow");
    });
});