<?php
require 'vendor/autoload.php'; // MongoDB PHP Library

// Conexión a MongoDB usando la cadena proporcionada
$mongo = (new MongoDB\Client('mongodb+srv://212310094:Admin123@dbnomina.7hfjg.mongodb.net/?retryWrites=true&w=majority&appName=DBNomina'))->J3O_Motors;

$pagosCollection = $mongo->Auto;
?>

