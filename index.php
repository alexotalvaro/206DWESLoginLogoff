<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require_once 'config/confApp.php';
require_once 'config/confDBPDO.php';

session_start();

if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
}

require_once $aControladores[$_SESSION['paginaEnCurso']];
?>
