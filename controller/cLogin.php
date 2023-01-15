<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

require_once 'config/confApp.php';
require_once 'config/confDBPDO.php';

if(isset($_REQUEST["inicioSesion"])){ //Si pulsamos en botón de iniciar sesion .... 
    $_SESSION['paginaEnCurso'] = 'inicioprivado'; //La página en curso ahora será la del INICIO PRIVADO ...
    header('Location: index.php'); //y me voy al index, en el cual, se cargara paginaencurso(INICIO PRIVADO)y ahí decide que hacer..
    exit;
}
?>
