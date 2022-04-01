<?php
// include 'ClaseBanc.php';
$error;
if(!empty($_POST['nombre']) && !empty($_POST['pass'])){
    $usuario = $_POST['nombre'];
    $clave = $_POST['pass'];
    
    if($usuario == "eddie" && $clave == "123"){
        
        $error = "accedio";
        
       header("Location: menu.php");
    }else{
        
        $error= "incorrecto";
        header("Location: index.php?error=$error");
       
    }
    // if($usuario == "sonia" && $clave == "1234"){
        
    //     $error = "accedio";
        
    //    header("Location: menu.php");
    // }else{
        
    //     $error= "incorrecto";
    //     header("Location: index.php?error=$error");
       
    // }
    
}else{
    $error='vacio';
    header("Location: index.php?error=$error");
}

?>