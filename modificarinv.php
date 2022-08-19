<?php

    $mysqli = new mysqli('localhost', 'root', '', 'inventario');

    if($mysqli->connect_error){
        
        die('Error en la conexion' . $mysqli->connect_error);	
    }

    $sql = "SELECT * FROM medicamentos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="row">				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="buscar" name="buscar" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
                    <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Presentacion</td>
                    <td>Categoria</td>
                    <td>Lote</td>
                    <td>Sector</td>
                    <td>Fecha</td>
                    <td>Estado</td>
                    <td>Cantidad</td>
                    </tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['presentacion'] ?></td>
                            <td><?php echo $row['categoria'] ?></td>
                            <td><?php echo $row['lote'] ?></td>
                            <td><?php echo $row['sector'] ?></td>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['estado'] ?></td>
                            <td><?php echo $row['cantidad'] ?></td>
								<td><a href="modificarinv.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>