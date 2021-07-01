// Ready State:
// 0: La petición no se ha inicializado
// 1: Conexion con el servidor establecida
// 2: petición recibida
// 3: Procesando Petición
// 4: Petición finalizada y la respuesta está lista.

// Status:
// 200: ok
// 404: Pagina no encontrada

function showResult(str){ // str es el input de la barra de busquedas
    if (str.length==0){ // si no hay nada escrito
        document.getElementById("livesearch").innerHTML=""; // no hay nada dentro del div
        document.getElementById("livesearch").style.border="0px"; // ponemos borde de 0 pixeles
        return; // salimos de la funcion
    }
    var ajax = new XMLHttpRequest(); // CREA EL OBJETO "AJAX". Que es una instancia de XMLHttpRequest
    // con ajax podemos de manera asincrona, sin recargar la pagina, hacer pedidos al servidor y mostrarlos en pantalla
    // A.J.A.X (Asynchronous JavaScript and XML)

    ajax.onreadystatechange = function() { // una vez cargado la peticion, ejecutamos funcion
      if(this.readyState == 4 && this.status == 200) { // si la peticion esta finalizada y el estado es OK
          // damos los estilos al div de la barra de busqueda
          document.getElementById("livesearch").style.border = "1px solid #A5ACB2"; //manipulacion del DOM (Modelo de objeto de documento)
          document.getElementById("livesearch").style.position = "absolute";
          document.getElementById("livesearch").style.backgroundColor = "white";
          document.getElementById("livesearch").style.textTransform = "uppercase";
          document.getElementById("livesearch").style.marginTop = "25px";
          document.getElementById("livesearch").style.overflow = "hidden";

          document.getElementById("livesearch").innerHTML = this.responseText; // ponemos dentro del div, la respuesta de ajax
      }
    }

    ajax.open("GET","buscar.php?q="+str, true); // en metodo GET, en el archivo buscar.php, mandando como variable q = el input de la barra
                                          // open especifica el tipo de pedido
                                          // true = activado el async
    ajax.send(); // mandamos la peticion
}