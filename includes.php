<?php
/**
 @Author: Dominik Ryńko
 @Website: http://www.rynko.pl/
 @Version: 1.2
*/

error_reporting(E_ALL ^ E_NOTICE);

if(phpversion() < '5.2.0') {
    die('<p>Twój server musi obsługiwać PHP w wersji 5.0.0 lub większej!</p>');
}

if($_SERVER['REQUEST_METHOD'] !== 'GET') {
    die('<p>Skrypt obsługuje tylko rządania GET!</p>');
}

$page = $_GET['page'];
$dir = 'pages/';
$ext = '.php';

if(isset($page)) {
    if (is_dir($dir)) {
        require_once($dir . $page . $ext);
    } else {
        echo '<p>Plik pages/ nie istnieje!</p>';
    }
} else {
    require_once($dir.'strona-glowna.php');
}
