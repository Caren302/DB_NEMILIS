<?php
        try 
        {
                
            $conMySQL = new PDO("mysql:host=localhost; port=3306; dbname=inventario", "root","");
            $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conMySQL->exec("SET CHARACTER SET UTF8");

            $nss= htmlspecialchars($_POST["telnss"]);
            $nombre = htmlspecialchars($_POST["txtnombre"]);
            $direccion = htmlspecialchars($_POST["txtdireccion"]);
            $telefono = (int)$_POST["teltelefono"];
            $correo = htmlspecialchars($_POST["txtcorreo"]);

            $sentenciaSQL= "INSERT INTO paciente (nss, nombre, direccion, telefono, correo) VALUES (?,?,?,?,?)";
            $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
            $sentenciaPrep->bindParam(1, $nss);
            $sentenciaPrep->bindParam(2, $nombre);
            $sentenciaPrep->bindParam(3, $direccion);
            $sentenciaPrep->bindParam(4, $telefono);
            $sentenciaPrep->bindParam(5, $correo);

            if($sentenciaPrep->execute())
            {
                printf("Registro almacenado en la BD");
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
