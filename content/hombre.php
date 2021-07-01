<?php
	session_start(); //Creamos la sesión o continua la ya creada basada en un identificador pasado por POST o GET o via coookie
	include_once('startpage.inc.php'); //Incluímos la startpage (login y register)
?>


<?php

function checkAdmin(){  //verificamos si la idPerfil es 1 (admin) o 2 (usuario)
    if(isset($_SESSION['idPerfil'])){
        if($_SESSION['idPerfil'] == 1){
            return true;
        }
    }
}

include('mostrarRopa.php');   // incluimos el php necesario para mostrar la ropa


$subcategoria = $_GET["subcategoria"];  //obtenemos la subcategoria que fue clickeada

if(checkAdmin()){ //si es admin puede agregar y borrar elementos 
    print <<< END
        <div id="clothes-container">
            <button id="add-clothes-btn" onclick="document.getElementById('add-clothes-div').style.display='block'">Agregar ropa
            </button>
        <div id="add-clothes-div">
            <span onclick="document.getElementById('add-clothes-div').style.display='none'" class="close"
                title="Cerrar">&times;</span>
            <form method="POST" action="cargarRopa.php?subcategoria=$subcategoria">
                <div class="form-upload">
                    <label>Nombre de la prenda</label>
                    <input type="text" name="nombrePrenda" class="input-style" id="clothe-name" title="Ingrese nombre." required>
                </div>

                <div class="form-upload">
                    <label>Ingrese precio ($)</label>
                    <input name="precioPrenda" type="text" class="input-style" pattern="^[0-9]+$" id="clothe-price"
                        onkeyup="validatePrice(document.getElementById('clothe-price'))" title="Ingrese precio."
                        required>
                    <span class="is-valid"></span>
                </div>

                <div class="form-upload">
                    <label>Ingrese color</label>
                    <input name="colorPrenda" type="color" class="input-style" id="clothe-color" title="Ingrese color.">
                </div>
                <div class="form-upload" style="width: 90%;">
                    <label>Ingrese nombre archivo de imagen</label>
                    <input name="imagenPrenda" type="text" class="input-style" id="clothe-img" title="Ingrese imagen." required>
                    <span id="example">Ej: remeragris1.jpg</span>
                </div>
                <input name="cargarPrenda" type="submit"  id="clothes-done" value="Agregar prenda"></input>
            </form>
        </div>
        END;
}

if($_GET["subcategoria"] == "hombre_bermudas"){  //obtenemos la subcategoria y agregamos los elementos a la pagina correspondiente
    print <<< END
        <div id="sub-category">
            <div id="t-shirt-text">
                <p id="catText">Bermudas de hombre</p>
            </div>
        </div>
    END;

    mostrarRopa(); // mostramos la ropa correspondiente a su categoria
}
else if($_GET["subcategoria"] == "hombre_chaquetas"){ //obtenemos la subcategoria y agregamos los elementos a la pagina correspondiente
    print <<< END
        <div id="sub-category">
            <div id="t-shirt-text">
                <p id="catText">Chaquetas de hombre</p>
            </div>
        </div>
    END;

    mostrarRopa();
}
else if($_GET["subcategoria"] == "hombre_remeras"){  //obtenemos la subcategoria y agregamos los elementos a la pagina correspondiente
    
    print <<< END
        <div id="sub-category">
            <div id="t-shirt-text">
                <p id="catText">Remeras de hombre</p>
            </div>
        </div>
    END;

    mostrarRopa();
}
?>

<?php
    include_once('endpage.inc.php'); //Incluye el footer y los scripts de javascript
?>