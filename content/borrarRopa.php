<?php
if(isset($_POST['deleteproduct'])){ // si esta seteado el boton de borrar
    include('connection.php');
    $conn = connectDB();

    $idPrenda = $_GET['prenda']; // prenda a borrar
    $sql="DELETE FROM prendas WHERE idPrenda=$idPrenda";

    if($conn->query($sql) === FALSE){
        header("Location: index.php?error=query_error"); // si hay error en el pedido, retornamos a index con error
        exit();
    }
    else{
        header('Location: ' . $_SERVER['HTTP_REFERER']); // redireccionamos a la pagina en la que se realiza el procedimiento
        exit();
    }
}
?>