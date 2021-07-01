<?php
if($_GET["subcategoria"] == "hombre_bermudas"){ // tomamos la subcategoria pasada en el click al header
    header("Location: hombre.php?subcategoria=hombre_bermudas"); // llevamos a su categoria correspondiente
    exit();
}

else if($_GET["subcategoria"] == "hombre_chaquetas"){
    header("Location: hombre.php?subcategoria=hombre_chaquetas");
    exit();
}

else if($_GET["subcategoria"] == "hombre_remeras"){
    header("Location: hombre.php?subcategoria=hombre_remeras");
    exit();
}
    
else if($_GET["subcategoria"] == "ninos_camperas"){
    header("Location: ninos.php?subcategoria=ninos_camperas");
    exit();
}

else if($_GET["subcategoria"] == "ninos_faldas"){
    header("Location: ninos.php?subcategoria=ninos_faldas");
    exit();
}
else if($_GET["subcategoria"] == "ninos_pijamas"){
    header("Location: ninos.php?subcategoria=ninos_pijamas");
    exit();
}

else if($_GET["subcategoria"] == "mujer_abrigos"){
    header("Location: mujer.php?subcategoria=mujer_abrigos");
    exit();
}
else if($_GET["subcategoria"] == "mujer_faldas"){
    header("Location: mujer.php?subcategoria=mujer_faldas");
    exit();
}

else if($_GET["subcategoria"] == "mujer_remeras"){
    header("Location: mujer.php?subcategoria=mujer_remeras");
    exit();
}

else if($_GET["subcategoria"] == "mujer_vestidos"){
    header("Location: mujer.php?subcategoria=mujer_vestidos");
    exit();
}
?>