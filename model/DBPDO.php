<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
require_once 'config/confApp.php';
class DBPDO implements DB {

    public static function ejecutarConsulta($sentenciaSQL, $parametros = null) {
        try {
            $miDB = new PDO(DSN, USUARIO, CONTRA); //Conexion a la BD muestra los datos y guarda el objeto
            
            //preparamos y realizamos la consulta.
            $consultaUsuarioExe = $miDB->prepare($sentenciaSQL);
            $consultaUsuarioExe->execute($parametros);
            $oResultado=$consultaUsuarioExe->fetchObject();
            //creamos el resultado de la consulta y lo guardamos en un objeto.
            return $oResultado;
            
        } catch (PDOException $excepcion) {
            echo $excepcion->getMessage();
        } finally {
            unset($miDB);
        }
    }

}
