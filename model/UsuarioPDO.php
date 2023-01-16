<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

require_once 'config/confApp.php';

class UsuarioPDO implements UsuarioDB {
    public static function validarUsuario($codUsuario, $password) {
        $sentenciaSQL = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario='$codUsuario' AND T01_Password=sha2('$codUsuario.$password',sha256)";
    }

}
