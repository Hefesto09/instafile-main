<?php
$targetDir = $carpetaRuta;
$files = scandir($targetDir);
$files = array_diff($files, array('.', '..'));

if (count($files) > 0) {
    echo " <h3 style='margin-bottom:10px;'>Archivos Subidos:</h3>";

    foreach ($files as $file) {
        echo "<div class='archivos_subidos'>
                            <div><svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-folder' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><path d='M3 4v16a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2v-10l-6 -4l-6 4z' /></svg></div>
                            <div><a href='$carpetaRuta/$file' download class='boton-descargar'>$file</a></div>
                            <div>
                            <form action='' method='POST' style='display:inline;'>
                                <input type='hidden' name='eliminarArchivo' value='$file'>
                                <button type='submit' class='btn_delete'>Eliminar</button>
                            </form>
                            </div>
                            </div>";
    }
} else {
    echo "No se han subido archivos.";
}
