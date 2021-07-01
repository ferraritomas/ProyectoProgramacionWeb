<?php
    function connectDB(){
        // variables correspondientes al servidor
        $servername = "localhost";
        $username = "root";
        $serverpass = "";
        $dbname = "fg_db";

        $conn = new mysqli($servername,$username,$serverpass,$dbname); //creamos conexion nueva
        
        if ($conn->connect_error) { // si hay un error en la conexion
            die("Conexion fallida: " . $conn->connect_error); // cortamos la conexion y mostramos su error
        }

        return $conn; // retornamos la conexion creada
    }

    function disconnectDB($conn){
        $conn->close(); // desconecta la conexion 
    }

    
?>