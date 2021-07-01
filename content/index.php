<?php
	session_start(); //Creamos la sesión o continua la ya creada basada en un identificador pasado por POST o GET o via coookie
	include_once('startpage.inc.php'); //Incluímos la startpage (login y register)
?>
<?php

// manejo de errores

if(isset($_GET["error"])){ // si en el arreglo asociativo hay algun error...

	if($_GET["error"]=="query_error"){ // error en el pedido a la base de datos
		print <<< END
			<script type="text/javascript">  
				setTimeout(function(){			
				alert("Error. Intente de nuevo"); 
				},250);
			</script>
		END;
		// a los 250 ms aparece el alert
	}
	else if($_GET["error"]=="email_exists"){ // si el email ya existe...
		print <<< END
			<script type="text/javascript">
				setTimeout(function(){				// Set 250ms timeout till execute next line
				alert("Error. El email ya está registrado.");
				},250);
			</script>
		END;
	}
	else if($_GET["error"]=="email_not_exists"){ // si el email no existe...
		print <<< END
			<script type="text/javascript">
				setTimeout(function(){				// Set 250ms timeout till execute next line
				alert("Error. El email no esta registrado en nuestra base de datos.");
				},250);
			</script>
		END;
	}
	
	else if($_GET["error"]=="incorrect_pwd"){ //si la contraseña es incorrecta
		print <<< END
			<script type="text/javascript">
				setTimeout(function(){				// Set 250ms timeout till execute next line
				alert("Contraseña incorrecta!");
				},250);
			</script>
		END;
	}	

}

else if(isset($_GET["register"])){ // si el boton de registrarse esta seteado
	if($_GET["register"] == "success"){ //si el registro es exitoso
		print <<< END
			<script type="text/javascript">
				setTimeout(function(){				// Set 250ms timeout till execute next line
					alert("¡Registro exitoso!");
				},250);
			</script>
			
		END;
		}
}

else if(isset($_GET["login"])){ // si el boton de logueo esta seteado
	if($_GET["login"] == "success"){ //si el logueo es exitoso
		print <<< END
			<script type="text/javascript">
				setTimeout(function(){				// Set 250ms timeout till execute next line
					alert("¡Logueo exitoso!");
				},250);
			</script>
			
		END;
		}
}
?>



 <div id="slideshow-container"> <!-- slider de imagenes -->
	<div class="mySlides fade">
		<div class="numbertext">1 / 4</div>
		<img src="../img/princ-img.png" style="width:100%">
		<div class="text">
			<span>from italy</span>
			<br>
			<span>to the</span>
			<br>
			<span>world</span>
		</div>
	</div>
	<div class="mySlides fade">
		<div class="numbertext">2 / 4</div>
		<img src="../img/img-men.jpg" style="width:100%">
		<div class="text">
			<span>elegant</span>
			<br>
			<span>as men</span>
			<br>
			<span>should</span>
		</div>
	</div>
	<div class="mySlides fade">
		<div class="numbertext">3 / 4</div>
		<img src="../img/img-women.jpg" style="width:100%">
		<div class="text">
			<span>feel</span>
			<br>
			<span>glamorous</span>
		</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">4 / 4</div>
		<img src="../img/img-kids.jpg" style="width:100%">
		<div class="text">
			<span>made for</span>
			<br>
			<span>all ages</span>
		</div>
	</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <!-- retrocedo a la anterior imagen -->
	<a class="next" onclick="plusSlides(1)">&#10095;</a> <!-- paso a la siguiente imagen -->
</div>


<?php
	include_once('endpage.inc.php'); //Incluye el footer y los scripts de javascript	
?>
