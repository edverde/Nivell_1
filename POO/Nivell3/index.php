<?php
include 'ClaseBanc.php';
$usuario = new Account(1234,'eduard','valls',1000);
echo $usuario->getNom();
?>