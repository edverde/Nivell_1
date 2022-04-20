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
    // <!-- ---------------------------------------------------------------------
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
            if($this->sou > 6000){
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

    // <!-- ----------------------------------------------------------------------------
    // exercici 2
    // ---------------------------------------------------------------------------- -->
    
    echo '<h2><u><strong>Exercici 2 </strong></u></h2><br>';
    echo "Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().<br>

    A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.<br><br>";

    //Superclase
    class Shape{
        //atributs
        var $base;
        var $altura;
        //constructor
        function shape($base, $altura){
            $this->base = $base;
            $this->altura = $altura;
        }

    }
    // subclases
    class Triangle extends Shape{
        function area(){
            $resultat = ($this->base*$this->altura)/2;
            echo "La base és " . $this->base . " i l'altura és " . $this->altura . ". L'area total del triangle és " . $resultat . "<br>";
        }
    }
    class Rectangle extends Shape{
        function area(){
           $resultat = $this->base*$this->altura;
           echo "La base és " . $this->base . " i l'altura és " . $this->altura . ". L'area total del rectangle és " . $resultat . "<br>";
        }
    }

    //Programa
    $triangle1 = new Triangle(5,8);
    $triangle1->area();

    $rectangle = new Rectangle(28, 35);
    $rectangle->area();



    ?>
</body>
</html>
