<?php
// include 'ClaseBanc.php';
$error;
if(!empty($_POST['nombre']) && !empty($_POST['pass'])){
    $usuario = $_POST['nombre'];
    $clave = $_POST['pass'];
    
    if($usuario == "ed" && $clave == "1234"){
        
        $error = "accedio";
        
       header("Location: menu.html");
    }else{
        
        $error= "incorrecto";
        header("Location: index.php?error=$error");
       
    }
    // if($usuario == "sonia" && $clave == "1234"){
    //     header("Location: menu.html");
    //     $error = "accedio";
    // }else{
    //     header("Location: index.php?error=$error");
    //     $error= "incorrecto";
    // }
}else{
   
   
    $error='vacio';
    header("Location: index.php?error=$error");
     
}
// $usuario = $_POST['nombre'];
// $clave = $_POST['pass'];

//conectar base de datos

// $conexion = mysqli_conect("localhost","root","","bdprueba");
// $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
// $resultado = mysqli_query($conexion, $consulta);
?>