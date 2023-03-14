<?php include 'includes/header.php';

// Conectar a la BD con PDO
$baseDatos = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', '');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Lo preparamos
$stmt = $baseDatos->prepare($query);

// Lo ejecutamos
$stmt->execute();

// Obtener los resultados
$resultado = $stmt->fetchAll( DPO::FETCH_ASSOC );

// Iterar
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo '<hr>';
    echo $propiedad['imagen'];
    echo '<hr>';
endforeach;

// echo '<pre>';
// var_dump($resultado);
// echo '</pre>';

include 'includes/footer.php';