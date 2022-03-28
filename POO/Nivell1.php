<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nivell 1</title>
</head>
<body>
    <?php
    // <!-- ----------------------------------------------------------------------------
    // exercici 1 
    // ---------------------------------------------------------------------------- -->
    
    echo '<h2><u><strong>Exercici 1 </strong></u></h2><br>';
    echo "Crea una classe Employee defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos).<br><br>";

    class Employee{
        //atributs
        var $nom;
        var $sou;
        //Constructor
        function initialize($nom, $sou){
            $this->nom = $nom;
            $this->sou = $sou;
        }
        //mètode
        function mostrar(){
            echo  'El teu nom és: '.$this->nom;
            if($this->sou >= 6000){
                echo "El teu sou és de " . $this->sou . "€ i has de pagar impostos<br>";
            }else{
                echo "El teu sou és de " . $this->sou . "€ i no has de pagar impostos<br>";
            }
        }
    }

    //instancies
    $empleat1 = new Employee();
    $empleat2 = new Employee();

    $empleat1->initialize('Eduard<br>',3000);
    $empleat2->initialize('Sonia<br>',7000);

    $empleat1->mostrar();
    $empleat2->mostrar();
    ?>
</body>
</html>