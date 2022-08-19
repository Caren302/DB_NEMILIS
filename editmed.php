
<?php

$id= $_POST['id'];
$nombre = $_POST['nombre'];
$presentacion = $_POST['presentacion'];
$categoria = $_POST['categoria'];
$lote = $_POST['lote'];
$sector = $_POST['sector'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$cantidad = $_POST['cantidad'];

$cnx = mysqli_connect("localhost", "root", "", "inventario" );
$sql= "UPDATE medicamentos SET nombre='$nombre', presentacion='$presentacion', categoria='$categoria', lote='$lote',sector='$sector', fecha='$fecha', cantidad='$cantidad' where id like $id";
$rta = mysqli_query($cnx,$sql);
if (!$rta)  
{
    echo "No se Actualizo";
}
else{
    header("Location: inventario.php");
}
?>