<?php
require_once 'php/modelos/partida_mod.php';

/**
 * Clase controladora para la gestión de partida.
 */
class Partida_con
{

    /**
     * Vista actual que se mostrará en la página.
     * @var string
     */
    public $vista;
    /**
     * Objeto encargado de la conexión con el modelo de partida.
     * @var Partida_Mod
     */
    public $obj;
    /**
     * Título de la página.
     * @var string
     */
    public $pagina;

    /**
     * Constructor de la clase Partida_con.
     */
    public function __construct()
    {
        $this->pagina = "Gestión de Partida"; //Titulo que tiene la pagina inicial
        $this->vista = ''; //Nombre de la vista inicial
        $this->obj = new Partida_Mod();
    }

    /**
     * Manda los datos de partida a través de AJAX.
     * @return mixed
     */
    public function ajaxPartida() {
        return $this->obj->ajaxDatosPartida();
    }

    /**
     * Manda los datos de partida a través de AJAX.
     * @return mixed
     */
    public function ajaxAnadirPartida() {
        //Hablar con isaac insertarPartida
        return $this->obj->insertarPartida();
    }
}