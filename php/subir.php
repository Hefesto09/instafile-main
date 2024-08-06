<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['archivo']) && is_array($_FILES['archivo']['name'])) {
        foreach ($_FILES['archivo']['name'] as $key => $name) {
            $nuevoNombreArchivo = str_replace(' ', '_', $name);
            $rutaTemp = $_FILES['archivo']['tmp_name'][$key];
            $rutaDestino = $carpetaRuta . '/' . $nuevoNombreArchivo;

            if (move_uploaded_file($rutaTemp, $rutaDestino)) {
                $subido = true;
                $mensaje = "Archivos subidos con éxito.";
            } else {
                throw new Exception("Error al subir el archivo: $name");
            }
        }
    }
}

?>