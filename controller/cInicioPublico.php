<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_REQUEST['iniciarsesion'])) {
    $_SESSION['paginaEnCurso'] = 'login';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['registrarse'])) {
    $_SESSION['paginaAnterior'] = 'inicioPublico';
    $_SESSION['paginaEnCurso'] = 'registro';
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['salir'])){
    header('Location: ../proyectoDwes/indexProyectoDWES.php');
    exit;
}

require_once $aVistas['layout']; //carga la pagina de inicio publico