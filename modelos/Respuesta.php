<?php

require_once "libs/Database.php";
require_once "modelos/Usuario.php";
require_once "modelos/Hilo.php";

class Respuesta {

    private $idRes;
    private $idHilo;
    private $idUsu;
    private $texto;
    private $fecha;
    private $positivos;
    private $negativos;
    
    
    
    function __construct() {
        
    }

    function getIdRes() {
        return $this->idRes;
    }

    function getIdHilo() {
        return $this->idHilo;
    }

    function getIdUsu() {
        return $this->idUsu;
    }

    function getTexto() {
        return $this->texto;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getPositivos() {
        return $this->positivos;
    }

    function getNegativos() {
        return $this->negativos;
    }

    function setIdRes($idRes) {
        $this->idRes = $idRes;
    }

    function setIdHilo($idHilo) {
        $this->idHilo = $idHilo;
    }

    function setIdUsu($idUsu) {
        $this->idUsu = $idUsu;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setPositivos($positivos) {
        $this->positivos = $positivos;
    }

    function setNegativos($negativos) {
        $this->negativos = $negativos;
    }


}
