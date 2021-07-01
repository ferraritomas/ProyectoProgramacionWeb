function togglePassword(){   // muestra o no la contraseña de los formularios con el "ojo"
  var x = document.getElementById("pass-login"); // input de contraseña
  var y = document.getElementById("hide2"); // ojo 1
  var z = document.getElementById("hide1"); // ojo 2

    if(x.type === "password") { // si el tipo de input es contraseña, muestro como texto
      x.type = "text";
      y.style.display = "block"; 
      z.style.display = "none";  
    } 
    else { //sino, muestro como contraseña
      x.type = "password";
      y.style.display = "none";
      z.style.display = "block";
    }
}
    
