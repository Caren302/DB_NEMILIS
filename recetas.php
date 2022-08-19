<?php
        try 
        {
                
            $conMySQL = new PDO("mysql:host=localhost; port=3306; dbname=inventario", "root","");
            $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conMySQL->exec("SET CHARACTER SET UTF8");

            $nombmed = htmlspecialchars($_POST["nombre_medico"]);
            $cedula = htmlspecialchars($_POST["cedula_medico"]);
            $fecha = htmlspecialchars($_POST["date"]);
            $folio = htmlspecialchars($_POST["folio"]);
            $direccion = htmlspecialchars($_POST["direccion"]);
            $nombpac = htmlspecialchars($_POST["nombre_paciente"]);
            $sexo = htmlspecialchars($_POST["sexo"]);
            $talla = htmlspecialchars($_POST["talla"]);
            $peso = htmlspecialchars($_POST["peso"]);
            $edad = htmlspecialchars($_POST["edad"]);
            $nss = htmlspecialchars($_POST["nss"]);
            $tc = htmlspecialchars($_POST["temperatura_corporal"]);
            $alergias = htmlspecialchars($_POST["alergias"]);
            $sintomas = htmlspecialchars($_POST["sintomas"]);
            $molestias = htmlspecialchars($_POST["molestias"]);
            $fc = htmlspecialchars($_POST["frecuencia_cardiaca"]);
            $medicamento = htmlspecialchars($_POST["medicamento"]);
            $presentacion = htmlspecialchars($_POST["presentacion"]);
            $categoria = htmlspecialchars($_POST["categoria"]);
            $sector = htmlspecialchars($_POST["sector"]);
            $toma = htmlspecialchars($_POST["toma"]);

            $sentenciaSQL= "INSERT INTO recetas (nombre_medico, cedula_medico, fecha, folio, direccion_medico, 
            nombre_paciente, sexo_paciente, talla_paciente, peso_paciente, edad_paciente, nss_paciente, 
            temperatura_corporal, alergias, sintomas, molestias, frecuencia_cardiaca, nombre_medicamento, 
            presentacion, categoria, sector, toma	) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
            $sentenciaPrep->bindParam(1, $nombmed);
            $sentenciaPrep->bindParam(2, $cedula);
            $sentenciaPrep->bindParam(3, $fecha);
            $sentenciaPrep->bindParam(4, $folio);
            $sentenciaPrep->bindParam(5, $direccion);
            $sentenciaPrep->bindParam(6, $nombpac);
            $sentenciaPrep->bindParam(7, $sexo);
            $sentenciaPrep->bindParam(8, $talla);
            $sentenciaPrep->bindParam(9, $peso);
            $sentenciaPrep->bindParam(10, $edad);
            $sentenciaPrep->bindParam(11, $nss);
            $sentenciaPrep->bindParam(12, $tc);
            $sentenciaPrep->bindParam(13, $alergias);
            $sentenciaPrep->bindParam(14, $sintomas);
            $sentenciaPrep->bindParam(15, $molestias);
            $sentenciaPrep->bindParam(16, $fc);
            $sentenciaPrep->bindParam(17, $medicamento);
            $sentenciaPrep->bindParam(18, $presentacion);
            $sentenciaPrep->bindParam(19, $categoria);
            $sentenciaPrep->bindParam(20, $sector);
            $sentenciaPrep->bindParam(21, $toma);

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
