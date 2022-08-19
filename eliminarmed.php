<?php

$id=$_GET["id"];
 
    $cnx = mysqli_connect("localhost", "root", "", "inventario" );
    $sql= "DELETE FROM medicamentos WHERE id LIKE $id ";
    $rta = mysqli_query($cnx,$sql);
    if (!$rta) 
    {
        echo "No se elimino";
    }
    else{
        header("Location: historialSalidas.php");
    }
?>