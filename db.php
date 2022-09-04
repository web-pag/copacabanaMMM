<?php
function conexion(){
    try {
        $con=new PDO('mysql:host=localhost;dbname=datoscopacabana', 'root','');
        return $con;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage() . "<br/>";
        die();
    }
}
?>