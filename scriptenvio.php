<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mostrar qué datos llegan
echo "<h2>Datos recibidos:</h2>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
