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
    echo "Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).<br>";

    function cadena($str){
        var_dump($str);
		echo "<br/>";

		$str2 = str_replace(" ", "", $str);
		var_dump($str2);
		echo "<br/>";
		
		$str2 = str_split($str2);
		var_dump($str2);
		echo "<br/>";
    }
    cadena('hello world');
    cadena('mas vale tener buen humor que en el culo un tumor');

    // <!-- ----------------------------------------------------------------------------
    // exercici 2
    // ---------------------------------------------------------------------------- -->
    echo '<h2><u><strong>Exercici 2 </strong></u></h2><br>';
    echo "Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.<br>";

    function compta($paraula, $lletra){
        $caracters = str_split($paraula);
        $quantitat = array_count_values($caracters);
        echo "La paraula $paraula es repeteix $quantitat[$lletra] cops la lletra ($lletra).<br>";
    }
    compta('sarajevo','j');
    compta('caca de baca','c');

    // <!-- ----------------------------------------------------------------------------
    // exercici 3
    // ---------------------------------------------------------------------------- -->
    echo '<h2><u><strong>Exercici 3 </strong></u></h2><br>';
    echo"Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.<br>";
    
    //$datos = array("nom"=>"Eduard", "cognom"=>"Valls", "edad"=>39);
    $x = array(10,20,30,40,50);
        echo "Tenim un array amb 4 posicions i 5 valors<br>";
        print_r($x);
        echo "<br>Ara borrem el cuart valor, es a dir la posicio [3] i l'array ens queda aixi:<br>";
        unset($x[3]);
        print_r(array_values($x));
        echo "<br>Hem fet servir la funcio array_values() per reordenar les posicions amb els valors.<br>";

    
    
        
    ?>
</body>
</html>