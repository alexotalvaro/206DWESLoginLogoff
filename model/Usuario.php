<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Usuario {

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $perfil;
    private $imagenUsuario;

    function __construct() {
        $this->codUsuario;
        $this->password;
        $this->descUsuario;
        $this->numConexiones;
        $this->fechaHoraUltimaConexion;
        $this->perfil;
        $this->imagenUsuario;
    }

    public function getCodUsuario() {
        return $this->codUsuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDescUsuario() {
        return $this->descUsuario;
    }

    public function getNumConexiones() {
        return $this->numConexiones;
    }

    public function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    public function getImagenUsuario() {
        return $this->imagenUsuario;
    }

    public function getPerfil() {
        return $this->perfil;
    }

}
