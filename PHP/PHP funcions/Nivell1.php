<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivell 1</title>
</head>
<body>
    <?php
    // <!-- ----------------------------------------------------------------------------
    // exercici 1 
    // ---------------------------------------------------------------------------- -->   
    
    echo '<h2><u><strong>Exercici 1 </strong></u></h2><br>';
    echo "Programa una funciò que, donat un número qualsevol(per exemple,la teva edat)  ens digui si és parell o imparell mitjançant un missatge per pantalla.<br><br>";
   

    function paroimpar($num){
        if(($num % 2) == 0 ){
            echo "El numero $num es par<br>";
        }else{
            echo "El numero $num es impar<br>";
        }
    }
    paroimpar(38);
    paroimpar(39);
    paroimpar(40);
    paroimpar(42);
    paroimpar(37);

    // <!-- ----------------------------------------------------------------------------
    // exercici 2 
    // ---------------------------------------------------------------------------- -->   
    
    echo '<h2><u><strong>Exercici 2 </strong></u></h2><br>';
    echo "Per jugar a el \"amagatall\" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.<br><br>";
    $fins = 10;
    for($i=0; $i<=$fins; $i+=2){
        if($i != $fins){
            echo $i.", ";
        }else{
            echo $i.".<br>";
        }
        
    }
    // <!-- ----------------------------------------------------------------------------
    // exercici 3 
    // ---------------------------------------------------------------------------- -->  
    echo '<h2><u><strong>Exercici 3 </strong></u></h2><br>';
    echo "Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.<br><br>";

    function conta($numero){
        for($i=0; $i<=$numero; $i+=2){
            if($i == $numero && ($numero%2)==0){
                echo $i.".<br>";
            }else{
                echo $i." - ";
                
            }
            
        }
    }
    conta(30);
   // <!-- ----------------------------------------------------------------------------
    // exercici 4
    // ---------------------------------------------------------------------------- -->  
    echo '<h2><u><strong>Exercici 4 </strong></u></h2><br>';
    

    ?>
</body>
</html>