<?php
$targetDir = $carpetaRuta;
$files = scandir($targetDir);
$files = array_diff($files, array('.', '..'));

if (count($files) > 0) {
    echo " <h3 style='margin-bottom:10px;'>Archivos Subidos:</h3>";

    foreach ($files as $file) {
        echo "<div class='archivos_subidos'>
            <div>
                <a href='$carpetaRuta/$file' download class='boton-descargar'>$file</a>
            </div>
            <div>
                <form action='' method='POST'>
                    <input type='hidden' name='eliminarArchivo' value='$file'>
                <button type='submit' class='btn_delete'>Eliminar</button>
            </form>
            </div>
        </div>";
    }
} else {
    echo "No se han subido archivos.";
}
