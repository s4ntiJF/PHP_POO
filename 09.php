<?php include 'includes/header.php';

// Conectar a la BD con Mysqli.
$baseDatos = new mysqli('localhost', 'root', '', 'bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Lo preparamos
$stmt = $baseDatos->prepare($query);

// Lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($titulo, $imagen);

// imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';