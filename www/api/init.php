<?php
//Inicializado de la API
$DEBUG_MODE = true;         //Muestra (en true) o no (en false) errores en pantalla. Esto caga mucho el JSON asi que ha de estar desactivado en prod.
$DEVEL_MODE = true;         //Habilita un token hardcodeado definido en ../config.php. Hace bypass al auth. OFF EN PRODUCCION
$CACHE_SAVE = false;        //En false NO guarda cache en el navegador. En true si que guarda.

//Ajustamos el content type a JSON que es lo que vamso a devolver
header('Content-Type: application/json');

//Ajusta el comportamiento de PHP dados los ajustes de arriba.
if ($DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}
if (!$CACHE_SAVE) {
    //NO CACHE
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
}

//Separando directorios
$param = preg_split("/\//", $_REQUEST['endpointdir'], -1, PREG_SPLIT_NO_EMPTY);
// $param[n] donde n es el parametro separado/por/barras guarda el directorio de la url consultada.

//Lanzamiento de la estructura principal de la api.
require("./api.php");
