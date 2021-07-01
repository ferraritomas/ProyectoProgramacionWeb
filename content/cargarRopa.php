<?php
function getCat(){ // nos devuelve el ID de categoria coincidente con la categoria en la que estamos
    $arrCat = array( // arreglo asociativo
        // clave => valor (el valor es la idCategoria de la DB)
        4 => "hombre_bermudas",
        5 => "hombre_chaquetas",
        6 => "hombre_remeras",
        7 => "ninos_camperas",
        8 => "ninos_faldas",
        9 => "ninos_pijamas",
        10 => "mujer_abrigos",
        11 => "mujer_faldas",
        12 => "mujer_remeras",
        13 => "mujer_vestidos",
    );

    for($i = 4 ; $i <= 13 ; $i++){ // recorremos el arreglo asociativo en busca de la categoria indicada
        if($arrCat[$i] == $_GET["subcategoria"]){
            return [$i,$arrCat[$i]]; // retornamos un arreglo asociativo con su ID de categoria y su nombre
        }
    }
}

    if(isset($_POST["cargarPrenda"])){ // si esta seteado el boton de cargar prenda
        
        include("connection.php");
        $conn = connectDB();
        // tomamos las variables del formulario
        $nombrePrenda = mysqli_real_escape_string($conn,$_POST["nombrePrenda"]);
        $precioPrenda = $_POST["precioPrenda"];
        $colorPrenda = $_POST["colorPrenda"];
        $imagenPrenda = mysqli_real_escape_string($conn,$_POST["imagenPrenda"]);
        
        $arrIdCategoria = getCat(); 
        $idCategoria = $arrIdCategoria[0]; // tomamos id categoria

        $sql = "INSERT INTO prendas (idCategoria,descripcion,precio,img,idColor)
        VALUES ($idCategoria, '$nombrePrenda', $precioPrenda, '$imagenPrenda', '$colorPrenda')";
        
        if($conn->query($sql) === FALSE){
            header("Location: index.php?error=query_error"); // si hay error en la carga, redirecciono con el error
            exit();
        }
        else{ // se carga la ropa en la base de datos
            header("Location: ropa.php?subcategoria=$arrIdCategoria[1]"); // redireccionamos a la subcategoria 
            exit();
        }    

    }
?>