<?php
        try 
        {
                
            $conMySQL = new PDO("mysql:host=localhost; port=3306; dbname=inventario", "root","");
            $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conMySQL->exec("SET CHARACTER SET UTF8");

            $cedula = htmlspecialchars($_POST["txtcedula"]);
            $nombre = htmlspecialchars($_POST["txtnombre"]);
            $direccion = htmlspecialchars($_POST["txtdireccion"]);
            $telefono = (int)$_POST["teltelefono"];
            $especialidad = htmlspecialchars($_POST["txtespecialidad"]);
            $correo = htmlspecialchars($_POST["txtcorreo"]);


            $sentenciaSQL= "INSERT INTO medicos (cedula, nombre, direccion, telefono, especialidad, correo, foto) VALUES (?,?,?,?,?,?,?)";
            $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
            $sentenciaPrep->bindParam(1, $cedula);
            $sentenciaPrep->bindParam(2, $nombre);
            $sentenciaPrep->bindParam(3, $direccion);
            $sentenciaPrep->bindParam(4, $telefono);
            $sentenciaPrep->bindParam(5, $especialidad);
            $sentenciaPrep->bindParam(6, $correo);
            $sentenciaPrep->bindParam(7, $imagen);

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
