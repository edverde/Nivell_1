

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Jones</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
        <section class="formulario">
            <form action="login.php" method="POST">
                <h2>Banco Jones</h2>
                <input class="controls" type="text" name="nombre" value="" placeholder="Nombre Usuario">
                <input class="controls" type="password" name="pass" value="" placeholder="Contraseña">
                <input class="buttons" type="submit" name="" value="Acceder">
                <!-- <span class="cojon">&#129505;</span> -->
                <p><a href="otc.html">¿Olvidaste la contraseña?</a></p>
                <?php
                if(isset($_GET['error'])){
                    $error= $_GET['error'];
                    if($error == "incorrecto"){
                        echo "<h5>El usuario o contraseña son incorrectos</h5>";
                    }
                    if($error == 'vacio'){
                        echo "<h5>Los datos enviados se encuentrasn vacíos.</h5>";
                    }
                }
                ?>
            </form>
        </section>
        
</body>
</html>
























<!-- // $usuario = new Account(1234,'eduard','valls',1000);
// echo $usuario->getSaldo();
// echo $usuario->withdraw(900);
// echo $usuario->getSaldo();

// echo $usuario->withdraw(2);
// echo $usuario->getSaldo();

// https://www.youtube.com/watch?v=MX1gz_hJqz4 enlazar login con PHP
// https://www.youtube.com/results?search_query=Validar+formulario+de+Login+con+PHP+con+POO -->
