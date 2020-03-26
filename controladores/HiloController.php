<?php
    require_once "BaseController.php";
    require_once "modelos/Usuario.php";
    require_once "modelos/Hilo.php";
    //require_once "modelos/Respuesta.php";

    class HiloController extends BaseController
    {

        public function __construct()
        {
            parent::__construct();
        }

 public function listar() {
        
        $dat = Hilo::findAll();
        echo $this->twig->render("showHilo.php.twig", ['dat' => $dat]);
      
    }
    }