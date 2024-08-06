<?php

if (isset($_POST['eliminarArchivo'])) {
    $archivoAEliminar = $_POST['eliminarArchivo'];
    $archivoRutaAEliminar = $carpetaRuta . '/' . $archivoAEliminar;

    if (file_exists($archivoRutaAEliminar)) {
        if (unlink($archivoRutaAEliminar)) {
            $mensaje = "Archivo '$archivoAEliminar' eliminado con éxito.";
        } else {
            throw new Exception("Error al eliminar el archivo.");
        }
    } else {
        throw new Exception("El archivo '$archivoAEliminar' no existe.");
    }
}


?>