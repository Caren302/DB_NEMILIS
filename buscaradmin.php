<?php

$buscar = $_POST['buscar'];
$cnx = mysqli_connect("localhost", "root", "", "inventario" );
$sql= "SELECT * FROM administradores WHERE nombre LIKE '$buscar' '%' order by id asc";
$rta = mysqli_query($cnx,$sql);
while ($mostrar = mysqli_fetch_row($rta))
{
    ?>
    <tr>
        <td><?php echo $mostrar['0'] ?></td>
        <td><?php echo $mostrar['1'] ?></td>
        <td><?php echo $mostrar['2'] ?></td>
        <td><?php echo $mostrar['3'] ?></td>
        <td><?php echo $mostrar['4'] ?></td>
        <td><?php echo $mostrar['5'] ?></td>
    </tr>
    <?php 
     if ($resultado = mysqli_query($conectar, $insertar))
     {
         header("location: listadmin.php");
     }
     else
     {
         printf("ERROR - Al amacenar en la BD");
     }
} 
?>