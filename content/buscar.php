<?php
function getCat($subcat){ // a diferencia de la funcion pasada en otros archivos, en esta se pasa la subcategoria
                            // para saber donde estamos ubicados
    $arrCat = array(
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

    for($i = 4 ; $i <= 13 ; $i++){
        if($i == $subcat){
            return $arrCat[$i]; // retornamos solo la categoria
        }
    }
}

include('connection.php');

$conn = connectDB();

$q =  mysqli_real_escape_string($conn,$_GET['q']); // input de la barra de busqueda

if(strlen($q)>0){ // mientras que la longitud del input sea mayor a 0

    $sql = "SELECT * FROM prendas WHERE descripcion LIKE '%$q%' LIMIT 5"; // seleccionamos en la DB con WILDCARDS
                                                                            // la descripcion que contenga a lo escrito en el input
    $result = $conn->query($sql); // resultado del pedido a la DB

    if($result === FALSE){
        header("Location: index.php?error=query_error"); // si hay error en el pedido, redirecciono a index con error
        exit();
    }

    else{
        $i = 0;
        $arrRow = [];
        $row = mysqli_fetch_assoc($result); // ponemos filas en arreglo asociativo

        while(isset($row)){ // si hay filas, metemos ese arreglo asociativo en un arreglo
            $arrRow[$i]=$row ;
            $row = mysqli_fetch_assoc($result);
            $i++;
        }
        mysqli_free_result($result); // liberamos el resultado

        $lenArrRow = count($arrRow) - 1; // longitud del arreglo de filas


        while($lenArrRow >= 0){
            // creamos variables con lo almacenado en la DB
            $response = $arrRow[$lenArrRow]['descripcion']; // la descripcion de la prenda
            $idCat = $arrRow[$lenArrRow]['idCategoria'];
            $cat = getCat($idCat); // tomamos la categoria actual, para pasarla por parametro al redireccionar
 
            if($response){ // si hay una descripcion, imprimimos el resultado de la busqueda
                print <<< END
                    <br id="search-height">
                    <a id="search-result" href="ropa.php?subcategoria=$cat">$response</a> 
                    <br id="search-height">
                END;
            }

            $lenArrRow--; // pasamos a la fila siguiente
        }
     

    }

}

?>