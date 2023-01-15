<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 * INDEX EN EL QUE SOLO SE MODIFICA LA VISA, EL FOOTER ESTÁ AQUÍ PORQUE ES SIEMPRE EL MISMO EN TODAS LAS PÁGINAS.
 */
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>LOGIN / LOGOFF</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
        <!--<link href="../webroot/css/estilos-layout.css" rel="stylesheet" type="text/css">-->
        <link href="../webroot/css/estilos-inicioPublico.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div>

            <h1>ALEJANDRO OTÁLVARO MARULANDA</h1>
            <br>
            <h3>LOGIN LOGOFF</h3>

            <div>
                <section>
                    <?php require_once $aVistas[$_SESSION['paginaEnCurso']]; //muestra dentro del body, la vista que carga de las vistas ?>
                </section>
            </div>

            <footer>
                <a href="/../index.php" style="text-decoration:none">
                    <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                         onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
                </a>
                <a href="../doc/CV.pdf" target="_blank" style="text-decoration: none">
                    <img src="../doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                         width="39" title="curriculum vitae" class="icono_cv" />
                </a>

                © Alejandro Otálvaro Marulanda

                <a href="https://github.com/alexotalvaro/206DWESLoginLogoff" target="_blank" style="text-decoration: none">
                    <img src="../doc/git.png" alt="git" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                         width="39" title="GIT"/>
                </a>

                <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
                   style="text-decoration: none">
                    <img src="../doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                         width="39" title="linkedin" class="icono_link" />
                </a>

            </footer>
        </div>
    </body>

</html>
