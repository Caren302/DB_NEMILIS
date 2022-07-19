
    <?php
        try {   
            $usuario=htmlspecialchars(addslashes($_POST["usuario"]));
            $password=htmlspecialchars(addslashes($_POST["password"]));

// echo $usuario; 
// echo $password;

            // setcookie("usuario", "usuario@hola.com", time() + 423000); 
            
            $conMySQL=new PDO("mysql:host=localhost;port=3306;dbname=inventario","root","");

            $conMySQL->setAttribute(PDO :: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);
            $conMySQL->exec("SET CHARACTER SET UTF8");
            $sentenciaSQL="SELECT * FROM usuarios WHERE usuario=:usuario AND password=:password";

            $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);

            

            $sentenciaPrep->execute(array(":usuario"=>$usuario,":password"=>$password));
  
            $numRegistros = $sentenciaPrep->rowCount();
            echo $numRegistros;
 
            if($numRegistros !=0)
            {
                session_start();
                $_SESSION["usuario"]=$_POST["usuario"];
                header("Location:admin.html");
                printf("error");
            }
            else
            {

                header("Location:index.html");
            }
        }
        catch(Exception$e)
        {

            die("Error:".$e->getMessage());

        }
        finally{$conMySQL=null;}
    ?>
