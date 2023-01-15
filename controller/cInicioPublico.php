<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

if (isset($_REQUEST['iniciarsesion'])) { //Si pulsamos en botón de iniciar sesion .... 
    $_SESSION['paginaEnCurso'] = "login"; //La página en curso ahora será la del LOGIN...
    header('Location: index.php'); // y me voy al index, en el cual, se cargara paginaencurso(login)y ahí decide que hacer..
    exit;
}

if (isset($_REQUEST['registrarse'])) { // Si pulsamos el botón de registrarse....
    $_SESSION['paginaAnterior'] = 'inicioPublico'; //La pagina anterior será iniciopublico, por si cancelamos..
    $_SESSION['paginaEnCurso'] = 'registro'; // La página en curso será la del registro.
    header('Location: index.php'); // y me voy al index, en el cual, se cargara paginaencurso(registro) y ahí decide que hacer..
    exit;
}

//botón opcional
if(isset($_REQUEST['salir'])){
    session_destroy();
    header('Location: ../206DWESProyectoDWES/indexProyectoDWES.php'); //Si le doy al boton de salir, se va al inicio donde están todos los proyectos/ejercicios.
    exit;
}

require_once $aVistas['layout']; //carga la pagina de inicio publico