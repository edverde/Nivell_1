<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivell 1</title>
</head>
<body>
    <!-- ----------------------------------------------------------------------------
    exercici 1 
    ---------------------------------------------------------------------------- -->
    <?php
    echo '<h2><u><strong>Exercici 1 </strong></u></h2><br>
      Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.';

    //variables
    $edad = 39;
    $nota = 2.5;
    $nom = 'Eduard Valls Roca';
    $cert = true;

    //impresió
    
    echo 'El meu nom és '.$nom.' i tinc '.$edad.' anys, estic aprenent a programar i treuré bona nota, un '.$nota.' seria un fracas, pero no em rendiría.<br>
    Aquest '.$cert.' significa true en una variable boolean.<br><br>';

    // <!-- ----------------------------------------------------------------------------
    // exercici 2 
    // ---------------------------------------------------------------------------- -->

    echo '<h2><u><strong>Exercici 2 </strong></u></h2><br>
    Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després Converteix tots els caràcters del string a majúscules i imprimeix en pantalla.<br>
    Imprimeix per pantalla la mida (longitud) de la variable.<br>
    Imprimeix per pantalla el string en ordre invers de caràcters.<br>
    Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.<br><br>';

    //variable
    $hola = 'Hello World!';
    $curs = 'Aquest és el curs de PHP';

    //impresió
    echo $hola.'<br>';
    echo strtoupper($hola).'<br>'; //funció per imprimir amb majuscules.
    echo "La longitud d'aquesta variable és de ".mb_strlen($hola).' bytes.<br>'; //funcio per retornar la longitud amb bytes
    echo strrev($hola).'<br>';
    echo $hola.' '.$curs.'<br><br>';
    
    // <!-- ----------------------------------------------------------------------------
    // exercici 3
    // ---------------------------------------------------------------------------- -->

    echo '<h2><u><strong>Exercici 3 </strong></u></h2><br>
    Crea una constant que contingui el teu nom i el imprimeixi per pantalla. Has imprimir-la amb format de títol i lletra en negreta en HTML.';

    //variable
    define('NOM','Eduard');
    
    echo '<br><h1><strong>'.NOM.'</strong></h1><br>';

    // <!-- ----------------------------------------------------------------------------
    // exercici 4 
    // ---------------------------------------------------------------------------- -->

    echo '<h2><u><strong>Exercici 4 </strong></u></h2><br>
    Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:<br><br>
    
    El valor de cada variable<br>
    La suma<br>
    La resta<br>
    El producte<br>
    El mòdul<br>
    Per N i M realitzaràs el mateix.<br><br>
    
    Per a totes les variables (X, Y, N, M)<br><br>
    
    El doble de cada variable<br>
    La suma de totes les variables<br>
    El producte de totes les variables<br><br>';
    
    //variables
    $X = 22;
    $Y = 39;
    $N = 0.5;
    $M = 8.4;

    echo '<u>X i Y</u><br><br>';
    echo 'El valor de X és '.$X.', i el valor de Y és '.$Y.'.<br>';
    echo $X.' + '. $Y.' = '.($X + $Y).'<br>';
    echo $X.' - '. $Y.' = '.($X - $Y).'<br>';
    echo $X.' x '. $Y.' = '.($X * $Y).'<br>';
    echo $X.' / '. $Y.' = '.($X / $Y).'<br>';
    echo $X.' % '. $Y.' = '.($X % $Y).'<br><br>';

    echo '<u>N i M</u><br><br>';
    echo 'El valor de N és '.$N.', i el valor de M és '.$M.'.<br>';
    echo $N.' + '. $M.' = '.($N + $M).'<br>';
    echo $N.' - '. $M.' = '.($N - $M).'<br>';
    echo $N.' x '. $M.' = '.($N * $M).'<br>';
    echo $N.' / '. $M.' = '.($N / $M).'<br>';
    echo $N.' % '. $M.' = '.($N % $M).'<br><br>';

    echo '<u>Totes les variables: X, Y, N i M</u><br><br>';

    echo " el doble de la variable 'X' és: ".($X*2). "<br>";
    echo " el doble de la variable 'Y' és: ".($Y*2). "<br>";
    echo " el doble de la variable 'N' és: ".($N*2). "<br>";
    echo " el doble de la variable 'M' és: ".($M*2). "<br>";
    echo "<br/>";
    echo "La suma de totes les variables és: ".($X + $Y + $N + $M)."<br>";
    echo "<br/>";
    echo "La multiplicació de totes les variables és: ".($X * $Y * $N * $M)."<br><br>";

    // <!-- ----------------------------------------------------------------------------
    // exercici 5 
    // ---------------------------------------------------------------------------- -->

    echo "<h2><u><strong>Exercici 4 </strong></u></h2><br>
    Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.<br><br>";

    $numeros1 = array(22, 83, 9, 38, 41);
    $numeros2 = array(78, 50, 100);

    echo "<br>Afegeix un valor més a l'array que conté 3 integers.<br>";
    
    array_push($numeros2, 500).'<br>';
    var_dump($numeros2).'<br>';

    echo "<br><br>Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.<br>";

    $totalarray = array_merge($numeros1, $numeros2);
    $tamany = sizeof($totalarray);

    echo 'El tamany del array és de '.$tamany.'<br>';
    print_r($totalarray);

    echo '<br><br>Ara imprimeix per pantalla el array resultant valor a valor.<br><br>';
    foreach($totalarray as $imp){
        echo $imp . "<br>";
    }
    






    





    ?>
</body>
</html>