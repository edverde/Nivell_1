<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // <!-- ----------------------------------------------------------------------------
    // exercici 1 
    // ---------------------------------------------------------------------------- -->   
    
    echo '<h2><u><strong>Exercici 1 </strong></u></h2><br>';
    echo "Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.<br><br>";

    for($i=1960; $i<=2016;$i+=4){
        echo "$i<br>";
    }

    // <!-- ----------------------------------------------------------------------------
    // exercici 2 
    // ---------------------------------------------------------------------------- -->   
    
    echo '<h2><u><strong>Exercici 2 </strong></u></h2><br>';
    echo "Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord a les següents premisses:<br>
    Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.<br>
    Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.<br><br>";
    function rebut($min){
        if($min>3){
            $total = ($min -3)*5 +10;
            echo "la teva trucada te un cost total de " . $total . " cèntims.<br>";
        }else{
            $total = 10;
            echo "la teva trucada te un cost total de " . $total . " cèntims.<br>";
        }
    }
    rebut(3.3);
    rebut(10.3);
    rebut(2.3);
    rebut(1);

    ?>
</body>
</html>