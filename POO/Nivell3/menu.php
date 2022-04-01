
<?php
include 'ClaseBanc.php';
$client = new Account(1234,'Eduard','Valls',1000);
// $client = new Account(1234,'Sonia','ferron',1000);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
        h1{
            color:rgb(0, 38, 135);
            text-transform: uppercase;
            text-align: center;
            margin-top: 100px;
        }
        h2{
       display: block;
       width: 450px;
       border: 1px solid black;
       text-align: center;
       border-radius: 10px;
       padding: 20px;
       margin: auto;
       margin-top: 100px;
       background-color:rgb(0, 38, 135);
       
       text-transform: uppercase;
       box-shadow: 7px 12px 36px black;

    }
    h2:first-of-type{
        margin-top: 100px;
    }
    a{
        color: #f3f3e7;
        text-decoration: none;
        font-size: 24px;
        user-select: none;
        padding-top: 100px;
        width: 150px;
        margin: auto;
        text-align: center;
    }
    .submenu{
        display:flex;
        justify-content:space-around;
        
    }
    .submenu a{
        color:rgb(0, 38, 135);
        text-transform: uppercase;
        width: 250px;
    }
    </style>
</head>

<body>
    <h1>Bienbenido <br><?php echo $client->getNom() . ' ' . $client->getCognom() ?> </h1>
    <h2><a href="">Ingresar dinero</a></h2>
    <h2><a href="">Retirar dinero</a></h2>
    <div class="submenu">
        <a href="saldo.php">Consultar saldo</a>
        <a href="index.php">salir</a>
    </div>
    
</body>
</html>