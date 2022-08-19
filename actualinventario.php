<?php

    $mysqli = new mysqli('localhost', 'root', '', 'inventario');

    if($mysqli->connect_error){
        
        die('Error en la conexion' . $mysqli->connect_error);	
    }

    $where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['buscar'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM medicamentos $where";
	$resultado = $mysqli->query($sql);

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
					<input  type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
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
					<?php

$conMySQL = new PDO("mysql:host=localhost;port=3306;dbname=inventario","root","");

$conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conMySQL->exec("SET CHARACTER SET UTF8");

$sentenciaSQL= "SELECT * FROM  medicamentos";
foreach($conMySQL->query($sentenciaSQL) as $fila)


   
    $fecha = htmlspecialchars($_POST["fecha"]);
    $nombre = htmlspecialchars($_POST["nombre"]);
    $presentacion = htmlspecialchars($_POST["presentacion"]);
    $lote = (int)$_POST["lote"];
    $categoria = htmlspecialchars($_POST["categoria"]);
    $sector = htmlspecialchars($_POST["sector"]);
    $estado = htmlspecialchars($_POST["estado"]);
    $cantidad = htmlspecialchars($_POST["cantidad"]);

    $conectar = mysqli_connect("mysql:host=localhost;port=3306;dbname=inventario","root","");

    if (mysqli_connect_errno())
    {
        printf("ERROR: %u - %s", mysqli_connect_errno(), mysqli_connect_error());
        exit();
    }

    mysqli_set_charset($conectar, "utf8");
    $insertar = "INSERT INTO medicamentos (fecha,nombre,presentacion,lote,categoria,sector,estado,cantidad)
    VALUES ('$fecha', '$nombre', '$presentacion', '$lote', '$categoria', '$sector','$estado','$cantidad')";

    if ($resultado = mysqli_query($conectar, $insertar))
    {
        printf("Registro almacenado en la BD");
    }
    else
    {
        printf("ERROR - Al amacenar en la BD");
    }
    mysqli_close($conectar);
?>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>