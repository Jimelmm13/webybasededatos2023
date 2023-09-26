function adivinarsinintentos(){
    
    var acierto = false ;
    var contadorErrores = 5;
    
    while (acierto == false && contadorErrores <5){ //El while solo se ejecutara si el usuario no acertó y aún no supera los 5 errores
    
          var n1 = prompt("Adivina un numero del 0 al 60");
        
        if (n1==azar) {
            acierto=true;
            document.write("Adivinaste, el número era " + azar);
         } else {
            contadorErrores++; //Si se equivoca, el contador de errores sube
            alert("Vuelve a intentar");
        }
        
        }
        
          if (contadorErrores === 5) window.close(); //El programa se cierra si el contador de errores llega a 5
   };