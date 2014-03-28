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

<div class="popup" id="popup-lpcontact">
		<strong class="orange large-heading">Using Over 5PB a Month?</strong>
		<p>We'll give you lower pricing. If you leave your details below, we'll contact you back with more information. Otherwise, you can <a href="#" onclick="return startWidget('chat');">live chat</a> us or call us at <span class="phone-number">(877) 629-2361</span>.</p>

		<form id="form-popup-contact-us-<?php echo getPageSlug(); ?>" method="post" enctype="application/x-www-form-urlencoded" action="http://resources.netdna.com/index.php/leadCapture/save" class="standard-form">
			<input type="hidden" name="lpId" value="-1" />
			<input type="hidden" name="subId" value="127" />
			<input type="hidden" name="kw" value="" />
			<input type="hidden" name="cr" value="" />
			<input type="hidden" name="searchstr" value="" />
			<input type="hidden" name="_mkt_disp" value="return" />
			<input type="hidden" name="_mkt_trk" value="" />
			<input name="content__c" type='text' value="" class="hidden" />
			<input name="LeadSource" type="hidden" value="MaxCDN.com">
			<input name="Lead_Source_Detail__c" type="hidden" value="MaxCDN Enterprise Contact Form">
			<input type="hidden" name="lpurl" value="http://resources.netdna.com/EnterpriseMaxCDNContactForm_EnterpriseMaxCDN_MaxCDNContactUs.html?cr={creative}&kw={keyword}" />
			<input type="hidden" name="formid" value="114" />
			<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
			<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
			<input name="URL_of_Lead_Source__c" type='hidden' value="<?php echo getURL(); ?>" />

			<div class="cols">
				<div class="trial-form generalcontact-form custom-form">
					<label>First Name <span class="orange-text">*</span></label>
					<input class="text required" type="text" name="FirstName" >
					<label>Last Name <span class="orange-text">*</span></label>
					<input class="text required" type="text" name="LastName" >
					<label>Email Address <span class="orange-text">*</span></label>
					<input class="text required" type="email" name="Email" >
					<label>Phone Number (optional)</label>
					<input class="text " type="text" name="Phone" >
					<label>Your Website <span class="orange-text">*</span></label>
					<input class="text required" type="text" name="Website" placeholder="http://your-company.com">
					<div class="clearfix"></div>
				</div>
			</div>
			<button type="submit" class="btn btn-submit">Get Lower Pricing</button>
		</form>
	</div><!-- /popup -->

<script type="text/javascript" src="<?php echo $filePrepender; ?>js/lp.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/jquery.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/custom-form.js"></script>
<script type="text/javascript" src="<?php echo $filePrepender; ?>js/custom-form.select.js"></script>
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