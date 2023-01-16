<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

require_once 'config/confApp.php';

interface DB {
    public function ejecutarConsulta($sentenciaSQL, $parametros);
}
