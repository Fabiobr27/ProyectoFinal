<?php

// Modelo Hilo
//Fabio Benitez Ramirez
require_once "libs/Database.php";

class Hilo {

    private $idHilo;
    private $idUsu;
    private $titulo;
    private $texto;
    private $fecha;
    private $positivos;
    private $negativos;

    function __construct() {
        
    }

    function getIdHilo() {
        return $this->idHilo;
    }

    function getIdUsu() {
        return $this->idUsu;
    }

    function getTitulo() {
        return $this->titulo;
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

    function setIdHilo($idHilo) {
        $this->idHilo = $idHilo;
    }

    function setIdUsu($idUsu) {
        $this->idUsu = $idUsu;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
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

    public static function findAll() {
        $db = Database::getInstance();
        $db->query("SELECT *
            FROM usuario u,Hilo h WHERE u.idUsu = h.idUsu ORDER BY h.fecha;");
         $data = [];
        while ($obj = $db->getObject("Hilo"))
            array_push($data, $obj);

        
        return $data;
    }
    
  


}
