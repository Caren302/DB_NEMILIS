<?php
        try 
        {
                
            $conMySQL = new PDO("mysql:host=localhost;port=3306;dbname=inventario","root","");

            $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conMySQL->exec("SET CHARACTER SET UTF8");

			$fecha = htmlspecialchars($_POST["date"]);
            $nombre = htmlspecialchars($_POST["txtnombre"]);
            $presentacion = htmlspecialchars($_POST["txtpresentacion"]);
            $cateforia = htmlspecialchars($_POST["txtcategoria"]);
            $lote = htmlspecialchars($_POST["txtlote"]);
            $newlote = intval ($lote);
            $sector = htmlspecialchars($_POST["sector"]);
            $fecha = htmlspecialchars($_POST["fecha"])
            $estado = htmlspecialchars($_POST["estado"]);
            $cantidad = htmlspecialchars($_POST["cantidad"]);
			$newcant = intval ($cantidad);

            $sentenciaSQL= "INSERT INTO medicamentos (nombre, presentacion, categoria, lote, sector, fecha, estado, cantidad) VALUES (?,?,?,?,?,?,?,?)";
            $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
            $sentenciaPrep->bindParam(1, $nombre);
            $sentenciaPrep->bindParam(2, $presentacion);
            $sentenciaPrep->bindParam(3, $cateforia);
            $sentenciaPrep->bindParam(4, $newlote);
            $sentenciaPrep->bindParam(5, $sector);
            $sentenciaPrep->bindParam(6, $fecha);
            $sentenciaPrep->bindParam(7, $estado);
            $sentenciaPrep->bindParam(8, $newcant);

            if($sentenciaPrep->execute())
            {
                header("Location: entradas.html");
            }
            else
            {
                printf("ERROR al almacenar el registro en la BD");
            }
        }
        catch (Exception $e)
        {
            printf ("¡Error!: ".$e->getMessage()."<br/>");
            die();
        }
        finally
        { $conMySQL = null; }
?>