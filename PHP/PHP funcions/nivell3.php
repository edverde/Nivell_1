<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivell 3</title>
</head>
<body>
    <?php
    // <!-- ----------------------------------------------------------------------------
    // exercici 1
    // ---------------------------------------------------------------------------- -->   
    
    echo '<h2><u><strong>Exercici 1 </strong></u></h2><br>';
    echo "La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret.<br><br>";

    function primer($num){
        $cont = 0;
        for ($i=1; $i <= $num; $i++) {
            if ($num % $i==0) $cont = $cont + 1;
        }
        if ($cont==2) return true;
        return false;
    }
    function criba($num){
        if(primer($num)==true){
            echo "el numero es primer.<br>";
        }else{
            echo "el numero no es primer.<br>";
        }
    }
    criba(4);
    criba(1);
    criba(2);
    criba(17);
    criba(0);
    criba(37);
    criba(40);



    ?>
</body>
</html>