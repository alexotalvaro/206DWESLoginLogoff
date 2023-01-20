<?php

/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */

class Error {
    private $codError;
    private $descError;
    
    function __construct($codError, $descError) {
        $this->codError;
        $this->descError;
    }
    
    public function getCodError(){
        return $this->codError;
    }
    
    public function getDescError(){
        return $this->descError;
    }
    
}
