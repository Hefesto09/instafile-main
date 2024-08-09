<?php
include('php/carpetasDesc.php')
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartir archivos</title>
    <script src="script/parametro.js"></script>
    <link rel="stylesheet" href="estilos/estov3.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="victorproyect.net.pe">
                    <li id="logo"><img src="img/logo.webp" alt="Logo"></li>
                </a>
                <div class="links-derecha">
                    <li id="info"><a href="subir.html">INFO</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <section class="compartir-archivos">
            <div class="content">
                <?php if (isset($mensaje)) : ?>
                    <p><?php echo htmlspecialchars($mensaje); ?></p>
                <?php endif; ?>
                <h1>Compartir archivos <sup class="beta">BETA</sup></h1>
                <p>comparte este enlace temporal: </p>
                <span id="url">victorproyect.net.pe/??=<?php echo htmlspecialchars($carpetaNombre, ENT_QUOTES, 'UTF-8'); ?></span>
                <button id="botoncopiar" onclick="copiarURL()">copiar</button>
                <div class="container">
                    <div class="drop-area" id="drop-area">
                        <form action="" id="form" method="POST" enctype="multipart/form-data">
                            <img src="img/nube.gif" alt="imagen" width="350" height="350">
                            <input type="file" class="file-input" name="archivo[]" id="archivo" multiple onchange="document.getElementById('form').submit()">
                            <label>Subir archivos</label>
                        </form>
                    </div>
                    <div class="container2">
                        <div id="file-list" class="pila">
                            <?php
                            include('php/multiArchivo.php')
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>©Copyright 2024 Rosales</p>
    </footer>
</body>

</html>