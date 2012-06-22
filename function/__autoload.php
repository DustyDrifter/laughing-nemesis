<?php
function __autoload ($klasse) {
 $file = 'class/'.$klasse.'.php';
if (file_exists($file)) {
   include_once  'class/'.$klasse.'.php';
}
}
spl_autoload_register ("__autoload");

// Zuweisung der Classen
$view = new view();

// Timezone wenn nicht in PHP.ini gesetzt
date_default_timezone_set('UTC');

// Einbindung der Konstanten
include_once "de_konstante.php";

// Einbindung der UserÜberprüfung
require_once 'meekrodb.2.0.class.php';

$view->header();


?>
