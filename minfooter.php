<?php
$filePrepender = (substr_count($_SERVER['SCRIPT_NAME'], '/') > 1) ? "../" : "";
?>

<div href="#" class="chat-now-popup chat-window" id="new-chat-popup">
		<p class="chat-popup-text">Feel free to call us: <span class="phone-number">+1 (877) 629-2361</span></p>
	</div>
	<map id="image-maps" name="image-maps">
		<area  shape="rect" coords="413,15,447,43" alt="" title="" target="_self" href="#" id="new-area"/>
	</map>
</div>

<!-- On-Exit Popup -->

<div class="popup-holder" id="main-exit-popup">
    <div class="modal-overlay">
        <div class="modal-bubble fancybox-skin">
        	 <div class="fancybox-close"></div>
            <h1 class="textcenter large-heading orange" id="optimizely-popup-headline"> Before you go do you have any questions?</h1>
            <p class="textcenter">We can get an answer to your question quickly! Simply fill out this form and we'll get back to you ASAP. Alternatively start a live chat or call us at 1-877-629-2361.</p><br />
            <div class="column two" id="or-column-after">
                <form id="exit-popup-form" method="post" enctype="multipart/form-data" action="https://forms.hubspot.com/uploads/form/v2/394224/2e282a6e-b85b-4feb-b58d-01b8925bcc1b">
                    <input type="hidden" name="lpId" value="-1" />
                    <input type="hidden" name="subId" value="127" />
                    <input type="hidden" name="kw" value="" />
                    <input type="hidden" name="cr" value="" />
                    <input type="hidden" name="searchstr" value="" />
                    <input type="hidden" name="_mkt_disp" value="return" />
                    <input type="hidden" name="_mkt_trk" value="" />
                    <input name="content__c" type='text' value="" class="hidden" />
                    <input name="leadsource" type="hidden" value="MaxCDN.com">
                    <input name="lead_source_detail__c" type="hidden" value="Enterprise Have Questions Form - On-Exit Popup">
                    <input type="hidden" name="lpurl" value="http://resources.netdna.com/MaxCDN_Questions_Page_MaxCDNContactUs.html?cr={creative}&kw={keyword}" />
                    <input type="hidden" name="formid" value="107" />
                    <input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
                    <input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
                    <input name="contact_form__c" type='hidden' value="<?php echo 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />

                    <section class="row"><label for="FirstName">First Name</label>
                                        <input class="required" name="firstname" type="text" tabindex="501" title="Your first name is required." x-moz-errormessage="Please Enter Your First Name" required></section>

                    <section class="row"><label for="LastName">Last Name</label>
                                        <input class="required" name="lastname" type="text" tabindex="502"  title="Your last name is required." x-moz-errormessage="Please Enter Your Last Name" required></section>

                    <section class="row"><label for="Email">Email</label>
                                        <input name="email" class="required" type="email" tabindex="503" title="A valid email address is required." x-moz-errormessage="Please Enter Your Valid Email Address" required></section>

                    <section class="row"><label for="Phone">Phone (optional)</label>
                                        <input name="phone" type="text" tabindex="505" ></section>

                    <section class="row"><label for="Contact_Form_Message__c">Message</label>
                                        <textarea name="contact_form_message__c" class="required" type="text" tabindex="506" required title="Make sure you include a message." x-moz-error-message="Please Write Your Message Here"></textarea></section>

                    <input type="submit" class="button orange" value="Ask Your Question" tabindex="507" id="modal-form-submit">

                </form>
            </div>
            <div class="column two" id="or-column-content">
            </div>
            <div class="column two" id="after-or-column">
            	<div id="ivana-support-image"></div>
            	<p class="ivana-caption">Ivana - CDN Support Engineer</p>
		<p class="condensed">Ivana can answer any questions you might have about our CDN or service.</p>
		<a title="Live Chat Now with MaxCDN" id="modal-chatnowbutton" href="#" onclick="return startWidget('chat');" class="button orange textcenter">START A LIVE CHAT</a>
            </div>
            <div class="clearfix"></div>
            <p class="phone-call">Or call us at <span class="phone-number">1 (877) 629-2361</span></p>
            <p>We're available now.</p>
        </div>
    </div>
</div>

<div class="popup" id="popup-lpcontact">
		<strong class="orange large-heading">Using Over 5PB a Month?</strong>
		<p>We'll give you lower pricing. If you leave your details below, we'll contact you back with more information. Otherwise, you can <a href="#" onclick="return startWidget('chat');">live chat</a> us or call us at <span class="phone-number">(877) 629-2361</span>.</p>

		<form id="form-popup-contact-us-<?php echo getPageSlug(); ?>" method="post" enctype="multipart/form-data" action="https://forms.hubspot.com/uploads/form/v2/394224/2e282a6e-b85b-4feb-b58d-01b8925bcc1b" class="standard-form">
			<input type="hidden" name="lpId" value="-1" />
			<input type="hidden" name="subId" value="127" />
			<input type="hidden" name="kw" value="" />
			<input type="hidden" name="cr" value="" />
			<input type="hidden" name="searchstr" value="" />
			<input type="hidden" name="_mkt_disp" value="return" />
			<input type="hidden" name="_mkt_trk" value="" />
			<input name="content__c" type='text' value="" class="hidden" />
			<input name="leadsource" type="hidden" value="MaxCDN.com">
			<input name="lead_source_detail__c" type="hidden" value="Enterprise LP Contact Form (popup)">
			<input type="hidden" name="lpurl" value="http://resources.netdna.com/EnterpriseMaxCDNContactForm_EnterpriseMaxCDN_MaxCDNContactUs.html?cr={creative}&kw={keyword}" />
			<input type="hidden" name="formid" value="114" />
			<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
			<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
			<input name="contact_form__c" type='hidden' value="<?php echo getURL(); ?>" />

			<div class="cols">
				<div class="trial-form generalcontact-form custom-form">
				<label>First Name <span class="orange-text">*</span></label>
					<input class="required text" name="firstname" pattern="^\w+$" type="text" tabindex="301" title="Your first name is required." x-moz-errormessage="Please Enter Your First Name" required>
					<label>Last Name <span class="orange-text">*</span></label>
					<input class="required text" name="lastname" pattern="^\w+$" type="text" tabindex="302"  title="Your last name is required." x-moz-errormessage="Please Enter Your Last Name" required>
					<label>Email Address <span class="orange-text">*</span></label>
					<input name="email" class="required text" type="email" tabindex="303" title="A valid email address is required." x-moz-errormessage="Please Enter Your Valid Email Address" required>
					<label>Phone Number (optional)</label>
					<input class="text " type="text" name="phone" tabindex="304">
					<label>Your Website <span class="orange-text">*</span></label>
					<input name="website" class="required text" type="text" title="Please enter a Valid URL" x-moz-errormessage="Please Enter Your Valid Website URL" tabindex="305" pattern="^(https?:\/\/)?(www\.)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w\.-]*)*\/?$" required>
					<label>Your Monthly Bandwidth Usage <span class="orange-text">*</span></label>
					<select class="required" name="NetDNA_Usage_Selection__c" tabindex="306">
						<option value="Select Bandwidth" selected="selected">Select Bandwidth</option>
						<option value="Under 5TB">Under 5TB</option>
						<option value="5TB - 10TB">5TB - 10TB</option>
						<option value="11 - 100TB">11 - 100TB</option>
						<option value="101TB - 1,000TB">101TB - 1,000TB</option>
						<option value="1PB+">1PB+</option>
					</select>
					<div class="clearfix"></div>
				</div>
			</div>
			<button type="submit" class="btn btn-submit" tabindex="307">Submit</a>
		</form>
	</div><!-- /popup -->

<script type="text/javascript" src="<?php echo $filePrepender; ?>js/lp.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/jquery.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/scripts.js?q=<?=getMD5Hash('js/scripts.js')?>"></script>

<script type="text/javascript">

			var seAgent;
			(function() {
				var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
				se.src = '//commondatastorage.googleapis.com/code.snapengage.com/js/5c293324-896b-4816-ad45-6fd7f39fa366.js';
				var done = false;
				var chatMsgCounter = 0;

				se.onload = se.onreadystatechange = function() {
					if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {

						SnapABug.setCallback('ChatMessageSent', function () {
							if(typeof $.cookie('first_message_sent') === "undefined") {
								$.cookie('first_message_sent', true, {expires: 1, path: '/'});
								_kmq.push(['record', 'Initial Chat Message Sent']);
								var kmCookie = $.cookie('km_ai');
			            				_gaq.push(['_trackEvent', 'LiveChat', 'Message Sent', kmCookie, undefined, true]);
							}
						});

						SnapABug.setCallback('OpenProactive', function(agent, msg, type) {
							seAgent = agent;
							_gaq.push(['_trackEvent', 'SnapEngage', 'proactivePrompt', agent]);
						});

						SnapABug.setCallback('StartChat', function(email, msg, type) {
							_gaq.push(['_trackEvent', 'SnapEngage', type + "Engaged", seAgent]);
						});

						SnapABug.setCallback('ChatMessageReceived', function (agent, msg) {
							seAgent = agent;
						});

					}
				};
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
			})();

			function startWidget(chatType) {
				try{
				__adroll.record_user({"adroll_segments": "adrollchat"})
				} catch(err) {}
				return SnapEngage.startLink();
			}
			function snapengage_get_agent_name() { return (typeof seAgent != 'undefined') ? seAgent : null; }

			googleUTMSources();

			if (typeof $.cookie('custom_utm_source') !== "undefined") {
				var lc_utm_source = $.cookie('custom_utm_source');
			}

			if (typeof $.cookie('custom_utm_campaign') !== "undefined") {
				var lc_utm_campaign = $.cookie('custom_utm_campaign');
			}

			if (typeof $.cookie('custom_utm_term') !== "undefined") {
				var lc_utm_term = $.cookie('custom_utm_term');
			}

			if (typeof $.cookie('custom_utm_content') !== "undefined") {
				var lc_utm_content = $.cookie('custom_utm_content');
			}

			if (typeof $.cookie('custom_utm_medium') !== "undefined") {
				var lc_utm_medium = $.cookie('custom_utm_medium');
			}

			if (typeof $.cookie('first_visit') !== "undefined") {
				var lc_first_visit = $.cookie('first_visit');
			}

			var lc_lead_system = "Salesforce";

		</script>

<script type="text/javascript">
adroll_adv_id = "DZPY6TZDGBGEJFB7JCH7ML";
adroll_pix_id = "DGK76G7V2VE7PKFLGTES5N";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>



<!-- PPC code -->
<script type="text/javascript">
	var _roiq=[];var _gaq={push:function(){var a;for(a=0;a<arguments.length;a++){_roiq.push(arguments[a])}}};var _gat={trackingObjects:{},_createTracker:function(a,b){return new _gat.Tracker(a,b)},_getTracker:function(a){return _gat._createTracker(a)},_getTrackerByName:function(a){var a=a||"";if(_gat.trackingObjects.hasOwnProperty(a)){return _gat.trackingObjects[a]}return _gat._createTracker("UA-XXXXX-X",a)},_anonymizeIp:function(){_gaq.push("_gat._anonymizeIp")},_forceSSL:function(){_gaq.push("_gat._forceSSL")},_getPlugin:function(){_gaq.push("_gat._getPlugin")},Tracker:function(a,g){var c,h,e=["_addDevId","_addEventListener","_addIgnoredOrganic","_addIgnoredRef","_addItem","_addOrganic","_addTrans","_clearIgnoredOrganic","_clearIgnoredRef","_clearOrganic","_clearTrans","_clearXKey","_clearXValue","_cookiePathCopy","_createEventTracker","_createXObj","_deleteCustomVar","_get","_getAccount","_getClientInfo","_getDetectFlash","_getDetectTitle","_getLinkerUrl","_getLocalGifPath","_getName","_getPlugin","_getServiceMode","_getVersion","_getVisitorCustomVar","_getXKey","_getXValue","_initData","_link","_linkByPost","_removeEventListener","_sendXEvent","_set","_setAccount","_setAllowAnchor","_setAllowHash","_setAllowLinker","_setAutoTrackOutbound","_setCampCIdKey","_setCampContentKey","_setCampIdKey","_setCampMediumKey","_setCampNOKey","_setCampNameKey","_setCampSourceKey","_setCampTermKey","_setCampaignCookieTimeout","_setCampaignTrack","_setClientInfo","_setCookiePath","_setCookiePersistence","_setCookieTimeout","_setCustomVar","_setDetectFlash","_setDetectTitle","_setDomainName","_setHrefExamineLimit","_setLocalGifPath","_setLocalRemoteServerMode","_setLocalServerMode","_setMaxCustomVariables","_setNamespace","_setPageGroup","_setReferrerOverride","_setRemoteServerMode","_setSampleRate","_setSessionCookieTimeout","_setSessionTimeout","_setSiteSpeedSampleRate","_setTrackOutboundSubdomains","_setTrans","_setTransactionDelim","_setVar","_setVisitorCookieTimeout","_setXKey","_setXValue","_trackEvent","_trackPageLoadTime","_trackPageview","_trackSocial","_trackTiming","_trackTrans","_visitCode"];var b=g||"";var f=a||"UA-XXXXX-X";for(c=0;c<e.length;c++){h=e[c];this[h]=d(h)}function d(i){return function(){if(b){i=b+"."+i}var j=Array.prototype.slice.call(arguments,0);j.unshift(i);_roiq.push(j)}}_gat.trackingObjects[b]=this}};
	(function () {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://03691fa0ab943e0c2c22-5e29631a3e7a95f0b191462b1b9d0d79.ssl.cf2.rackcdn.com/gascript.js' : 'http://37fabcac6ba15e1f68ed-5e29631a3e7a95f0b191462b1b9d0d79.r61.cf2.rackcdn.com/gascript.js');
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
</script>

</body>
</html>