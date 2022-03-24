<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivell 2</title>
</head>
<body>
    <?php
    // <!-- ----------------------------------------------------------------------------
    // exercici 1 
    // ---------------------------------------------------------------------------- -->
    echo '<h2><u><strong>Exercici 1 </strong></u></h2><br>';
    echo 'Escriu un programa PHP per calcular la suma dels dos valors enters donats. Si els dos valors són iguals, torna el doble de la seva suma.<br>';

    function sumar($num1,$num2){
        if($num1===$num2){
            $resposta = ($num1+$num2)*2 .'<br>';
            echo $resposta;
        }else{
            $resposta = $num1+$num2 .'<br>';
            echo $resposta;
        }
        
    }
    echo 'La suma dels valors és: <br>';
        echo sumar(1,2);
        echo sumar(2,2);
        echo sumar(9,3);
        echo sumar(50,50);

    // <!-- ----------------------------------------------------------------------------
    // exercici 2
    // ---------------------------------------------------------------------------- -->
    echo '<h2><u><strong>Exercici 2 </strong></u></h2><br>';
    echo "Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada i imprimeix la nova cadena.<br>";

    function canvi($paraula){
       $v1 = substr($paraula,-1);
       $v2 = substr($paraula, 0,1);
       $v3 = substr($paraula,1,-1);
    
       echo $paraula ." = ".$v1 . $v3 . $v2 .'<br>';
    }
    canvi('capgros');
    canvi('blau');
    canvi('membrana');

    ?>
    
</body>
</html>