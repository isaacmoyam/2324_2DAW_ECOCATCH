<?php
/**
 * Controlador principal para la gestión de basura.
 *
 * PHP version 7.0
 *
 * @category EcoCatch
 * @package  Gestion_Basura_Controlador
 * @author   EquipoA
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */

require_once 'php/config/configdb.php';
require_once 'php/modelos/db.php';

/*
if(!isset($_GET["control"])) $_GET["control"] = constant("CONTROLADOR_DEFAULT");
if(!isset($_GET["metodo"])) $_GET["metodo"] = constant("METODO_DEFAULT"); */

$nombreControl = constant("CONTROLADOR_DEFAULT")."_Con";
$nombreMetodo = constant("METODO_DEFAULT");

if(isset($_GET["control"])) $nombreControl = $_GET["control"]."_Con";
if(isset($_GET["metodo"])) $nombreMetodo = $_GET["metodo"];

$directorioControlador = 'php/controladores/'.$nombreControl.'_con.php';

// Comprobar si el controlador existe
if(!file_exists($directorioControlador)) $directorioControlador = 'php/controladores/'.constant("CONTROLADOR_DEFAULT").'_con.php';

// Cargar controlador
require_once $directorioControlador;
$controlador = new $nombreControl();

/* Ver si el método está definido */
$datosVista["datos"] = array();
if (method_exists($controlador, $nombreMetodo)) 
    $datosVista["datos"] = $controlador->{$nombreMetodo}();

echo $nombreControl;
echo $nombreMetodo;

/* Cargar vistas */
require_once 'php/vistas/templates/header.php';
require_once 'php/vistas/'.$controlador->vista.'.php';
require_once 'php/vistas/templates/footer.php';
?>