<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
require_once 'config/confApp.php';
class DBPDO {

    public static function ejecutaConsulta($sentenciaSQL) {
        try {
            $miDB = new PDO(DSN, USUARIO, CONTRA); //Conexion a la BD muestra los datos y guarda el objeto
            $consultaUsuarioExe = $miDB->prepare($sentenciaSQL);
            $consultaUsuarioExe->execute();
            $oConsulta = $consultaUsuarioExe->fetchObject();
        } catch (PDOException $excepcion) {
            echo $excepcion->getMessage();
        } finally {
            unset($miDB);
        }
    }
}
