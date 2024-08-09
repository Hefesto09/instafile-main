<?php
$carpetaNombre = isset($_GET['?']) ? $_GET['?'] : '';
$carpetaRuta = "./descarga/" . $carpetaNombre;

try {

    if (!file_exists($carpetaRuta)) {
        mkdir($carpetaRuta, 0755, true);
        $mensaje = "Carpeta '$carpetaNombre' creada con éxito.";
    } else {
        $mensaje = "La carpeta '$carpetaNombre' ya existe.";
    }
    include('php/subir.php');
    include('php/eliminarArchivo.php');
} catch (\Exception $e) {
    $mensaje = "Error: " . htmlspecialchars($e->getMessage());
}

?>