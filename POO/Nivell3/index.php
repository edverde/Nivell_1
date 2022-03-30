<?php
include 'ClaseBanc.php';
$usuario = new Account(1234,'eduard','valls',1000);
echo $usuario->getSaldo();
echo $usuario->withdraw(900);
echo $usuario->getSaldo();
// echo $usuario->withdraw();
// echo $usuario->withdraw('wq');
echo $usuario->withdraw(2);
echo $usuario->getSaldo();

// https://www.youtube.com/watch?v=MX1gz_hJqz4 enlazar login con PHP
// https://www.youtube.com/results?search_query=Validar+formulario+de+Login+con+PHP+con+POO
?>