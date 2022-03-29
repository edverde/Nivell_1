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
    echo "Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.<br>

    Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.<br>
    
    Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.<br>
    
    Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.<br>
    
    A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.<br><br>";

    
    class PokerDice{

        //atributs
        static $cara = array("A"=>'As', 
                            "K"=>'rei', 
                            "Q"=>'reina', 
                            "J"=>'jota',
                             7=> 'set', 
                             8=> 'vuit');
        static $cont=0;
        
        //mètodes
        
       
        function throw(){
            $caraRandom = array_rand(PokerDice::$cara);
            return $caraRandom.'<br>';
        }
        function shapeName(){
            $caraRandom = array_rand(PokerDice::$cara);
            return 'Has tirat el dau i ha sortit '.PokerDice::$cara[$caraRandom].'<br>';
        }
        function tirada(){
            $dau1 = new PokerDice;
            $dau2 = new PokerDice;
            $dau3 = new PokerDice;
            $dau4 = new PokerDice;
            $dau5 = new PokerDice;
            PokerDice::$cont++;
            echo $dau1->throw() . $dau2->throw() . $dau3->throw() . $dau4->throw() .$dau5->throw();
        }
        function getTotalThrows(){
            PokerDice::$cont;
            echo 'has tirat '.PokerDice::$cont.' vegades<br>' ;
        }



    }
   
    $jugada = new PokerDice;

   
    $jugada->tirada();
    $jugada->getTotalThrows();
    $jugada->tirada();
    $jugada->getTotalThrows();
    $jugada->tirada();
    $jugada->getTotalThrows();



    
    
    
    // $caras = array('As','K','Q','J');
    // $contar = count($caras);
    // echo $caras;
    ?>

</body>
</html>