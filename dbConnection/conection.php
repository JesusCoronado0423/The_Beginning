<?php
class ConectarDB {

    function conectar(){
        $servername = "localhost";
        $database = "tech_store";
        $username = "root";
        $password = "root";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            // echo "SCCESS";
        }
        return $conn;
    }
}
?>