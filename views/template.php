<html>
    <head>
        <title>UTA</title>
        <meta charset="UTF-8">
        <link rel="icon" href="images/iconoFisei.jpg">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>

    <body>
        <header>
            <img src="images/header.png" width="100%" height="22%">
        </header>
        <nav>
            <ul>
                <li><a href="index.php?action=servicios">Inicio</a></li>
                <li><a href="index.php?action=servisioss">Servicios</a></li>
                <li><a href="index.php?action=contactanosS">Contactos</a></li>
                <li><a href="index.php?action=servicios">Informacion</a></li>
            </ul>
        </nav>    
        <section>
            <?php
                $mvc = new MvcController();
                $mvc -> enlacesPaginasController();
            ?>
            <br>
        </section>
        <footer>
            @ Derechos reservados 
        </footer>
    </body>
</html>