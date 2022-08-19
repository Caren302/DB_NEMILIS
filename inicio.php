
        <?php
            try
            {
# Las conexiónes se establecen creando instancias de la clae PDO.
# El constructor acepta parámetros para especifiar el origen de la base de datos (conocido como DSN).
# Y, opcionalmente, el nombre de usuario y la contraseña (si la hubiera).
                $conMySQL = new PDO("mysql:host=localhost; port=3306; dbname=inventario", "root", "");
# PDO::setAttribute - Establece el atributo.
                $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conMySQL->exec("SET CHARACTER SET UTF8");
                $sentenciaSQLu = "SELECT * FROM administradores WHERE usuario = :login AND password = :passw";
                $sentenciaPrepu = $conMySQL->prepare($sentenciaSQLu);
# htmlspecialchars - Convierte caracteres especiales en entidades HTML.
# addslashes - Escapa un string con barras invertidas.
                $log=htmlspecialchars(addslashes($_POST["usuario"]));
                $pas=htmlspecialchars(md5($_POST["password"]));
#PDOStatement::execute - Ejecuta una sentencia preparada.
                $sentenciaPrepu->execute(array(":login"=>$log, ":passw"=>$pas));
# PDOStatement::rowCount - Devuelve el numero de filas afectadas por la última sentencia SQL.
                $numRegistrosu = $sentenciaPrepu->rowCount();
                if ($numRegistrosu !=0)
                {
                    session_start();
                    $_SESSION["usuario"]=$_POST["user"];
                    header("Location:paginaInicio.html");
                    //echo ("hola1");
                }
                else
                {
# header - Enviar encabezado sin formato HTTP.
                    header("Location:Inicio.html");
                    //echo ("hola");
                }
            }
            catch(Exception $e)
            {
# die ó exit - Imprime un mensaje y termina el script actual.
                die("Error: " . $e->getMessage());
            }
            finally { $conMySQL = null;   }
        ?>
