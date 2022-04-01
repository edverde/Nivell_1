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
            if($i == $numero){
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
    echo "Per prevenir oblits a l'utilitzar la nostra meravellosa opció \"amagatall\" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.<br><br>";

    function amagatall($numero=10){
        
        for($i=0; $i<=$numero; $i+=2){
            if($i == 10){
                echo $i.".<br>";
            }else{
                echo $i." - ";
                
            }
            
        }
    }
    amagatall(10);
    
    // <!-- ----------------------------------------------------------------------------
    // exercici 5
    // ---------------------------------------------------------------------------- -->  
    echo '<h2><u><strong>Exercici 5 </strong></u></h2><br>';
    echo "Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota<br><br>.

    Condicions<br><br>
    
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.<br>
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.<br>
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.<br>
    Si la nota és menor a 33%, l'estudiant reprovarà.<br><br>";

    function nota($num){
        if($num>=60 && $num<=100){
            echo "La teva nota de un $num% és de primera divisió.<br>";
        }else if($num>=45 && $num<=59){
            echo "La teva nota de un $num% és de segona divisió.<br>";  
        }else if($num>=33 && $num<=44){
            echo "La teva nota de un $num% és de tercera divisió.<br>";
        }else if($num<33){
            echo "La teva nota de un $num% haurás de reprovar.<br>";
        }else{
            echo "$num no és correcte.<br>";
        }
    }
    nota(68);
    nota(47);
    nota(33);
    nota(101);
    nota(0);

    // <!-- ----------------------------------------------------------------------------
    // exercici 6
    // ---------------------------------------------------------------------------- -->  
    echo '<h2><u><strong>Exercici 6 </strong></u></h2><br>';
    echo "Charlie em va mossegar el dit!<br>

    Charlie et mossegarà el dit exactament el 50% del temps.<br>
    
    Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.<br>
    
    Consell: pot ser que la funció rand () et resulti útil.<br><br>";
    
    
    function mosega(){
        $num = rand(0,1); //rand retorna un número entre els parametres que coloques.
        echo 'el numero aleatori és '.$num;
        if($num != 0){
            return false;
        }else{ 
            return true; 
        }
    
    }
    
    function isBitten(){
        if(mosega()==true){
            echo ' em mossega<br>';
        }else{
            echo ' no em mosega<br>';
        }
    }
    isBitten();isBitten();isBitten();
        
    

    
    // function isBitten($num){
    //     // echo $num . "<br/>";
    //     if ($num == 1){
    //       echo "se muerde";
    //     }else {
    //       echo "no se muerde";
    //     }
    //   }
    //   isBitten(rand(1,2));
    ?>
</body>
</html>