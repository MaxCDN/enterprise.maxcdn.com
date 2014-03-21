<?php
$filePrepender = (substr_count($_SERVER['SCRIPT_NAME'], '/') > 1) ? "../" : "";
?>

<footer>
	<div class="holder">
		<div class="col">
			<h3 class="orange">Products</h3>
			<ul class="list">
				<li><a id="footeroverview" href="http://www.maxcdn.com/solutions/">Overview</a></li>
				<li><a id="footercaching" href="http://www.maxcdn.com/products/edgecaching/">EdgeCaching</a></li>
				<li><a id="footerrules" href="http://www.maxcdn.com/products/edgerules/">EdgeRules</a></li>
				<li><a id="footerssl" href="http://www.maxcdn.com/products/edgessl/">EdgeSSL</a></li>
				<li><a id="footersecure" href="http://www.maxcdn.com/products/edgesecurity/">EdgeSecurity</a></li>
			</ul>

			<h3 class="orange">Legal</h3>
			<ul class="list">
				<li><a id="footerterms" href="http://www.maxcdn.com/legal/terms/">Legal Terms</a></li>
				<li><a id="footerpolicy" href="http://www.maxcdn.com/legal/privacy/">Privacy Policy</a></li>
				<li><a id="footerdmca" href="http://www.maxcdn.com/legal/dmca/">DMCA	</a></li>
				<li><a id="footeraup" href="http://www.maxcdn.com/legal/aup/">AUP</a></li>
			</ul>
		</div>
		<div class="col">
			<h3 class="orange">SOLUTIONS</h3>
			<ul class="list">
				<li><a id="footeradver" href="http://www.maxcdn.com/solutions/advertising/">Advertising</a></li>
				<li><a id="footercms" href="http://www.maxcdn.com/solutions/cms/">CMS</a></li>
				<li><a id="footergaming" href="http://www.maxcdn.com/solutions/gaming/">Gaming</a></li>
			</ul>

			<h3 class="orange">Support</h3>
			<ul class="list">
				<li><a id="footerbase" href="http://support.maxcdn.com/kb/">Knowledge Base</a></li>
				<li><a id="footercmsplugins" href="http://support.maxcdn.com/cms-plugins/">CMS Plugins</a></li>
				<li><a id="footerapi" href="http://docs.maxcdn.com/">Developers/API</a></li>
				<li><a id="footerforum" href="http://www.maxcdn.com/forum/">Forum</a></li>
				<li><a id="footeraff" href="http://www.maxcdn.com/company/affiliates/">Affiliates</a></li>
				<li><a id="footerstatus" href="http://status.maxcdn.com/">Status</a></li>
			</ul>
		</div>
		<div class="col">
			<h3 class="orange">Company</h3>
			<ul class="list">
				<li><a id="footercustomers" href="http://www.maxcdn.com/company/customers/">Customers</a></li>
				<li><a id="footercareer" href="http://www.maxcdn.com/company/careers/">Careers</a></li>
				<li><a id="footerblog" href="http://blog.maxcdn.com/">Blog</a></li>
				<li><a id="footerteam" href="http://www.maxcdn.com/company/team/">Team</a></li>
				<li><a id="footercontact" href="http://www.maxcdn.com/contact/">Contact</a></li>
			</ul>
		</div>

		<div class="col col-2">
			<h3 class="orange">Telephone</h3>
			<dl class="dlist">
				<dt>Toll Free</dt>
				<dd><span class="str">+1 (877) MAXCDN-1</span><span class="phone-number str">+1 (877) 629-2361</span></dd>
				<dt>International</dt>
				<dd>+1 (323) 313-1206</dd>
				<dt>Fax</dt>
				<dd>+1 (323) 843-9584</dd>
			</dl>
			<h3 class="orange">Address</h3>
			<address>
				<span class="str">MaxCDN Enterprise</span>
				<span class="str">3575 Cahuenga Blvd. West, Suite 330</span>
				<span class="str">Los Angeles, CA 90068</span>
			</address>
		</div>
		<div class="col col-3">
			<div class="box">
				<a href="#" class="btn" onclick="return startWidget('chat');">CHAT NOW</a>
				<strong class="phone"><span class="phone-number">+1 (877) 629-2361</span></strong>
				<span class="str orange">Supercharge your site</span>
				<ul class="socials">
					<li><a href="https://twitter.com/maxcdn" target="_blank" class="ico">twitter</a></li>
					<li><a href="https://www.facebook.com/MaxCDN" target="_blank" class="ico ico-2">facebook</a></li>
					<li><a href="https://plus.google.com/105665919150587532072/" target="_blank" class="ico ico-3">google+</a></li>
				</ul>
			</div>
		</div>
	</div><!-- /holder -->
	<div href="#" class="chat-now-popup chat-window" id="new-chat-popup">
		<p class="chat-popup-text">Feel free to call us: <span class="phone-number">+1 (877) 629-2361</span></p>
	</div>
	<map id="image-maps" name="image-maps">
		<area  shape="rect" coords="413,15,447,43" alt="" title="" target="_self" href="#" id="new-area"/>
	</map>
</div>
	
</footer><!-- /footer -->
<div class="hidden-popup">
	<div class="popup" id="popup-contact">
		<strong class="orange large-heading">Ready for Your Test Drive?</strong>
		<p>Please fill out the form below and we'll give you a call to set up your free seven day MaxCDN Enterprise trial. Try us out and see how fast we are for yourself.</p><p>Give us a support call at <span class="phone-number">(877) 629-2361</span> &mdash; you'll have access to priority support.<br/>We're sure that our service and performance will exceed your expectations.</p>
		<form id="form-popup-free-trial-<?php echo getPageSlug(); ?>" method="post" enctype="application/x-www-form-urlencoded" action="http://resources.netdna.com/index.php/leadCapture/save" class="standard-form">
			<input type="hidden" name="lpId" value="-1" />
			<input type="hidden" name="subId" value="127" />
			<input type="hidden" name="kw" value="" />
			<input type="hidden" name="cr" value="" />
			<input type="hidden" name="searchstr" value="" />
			<input type="hidden" name="_mkt_disp" value="return" />
			<input type="hidden" name="_mkt_trk" value="" />
			<input name="content__c" type='text' value="" class="hidden" />
			<input name="LeadSource" type="hidden" value="MaxCDN.com">
			<input name="Lead_Source_Detail__c" type="hidden" value="MaxCDN Enterprise Free Trial Form">
			<input type="hidden" name="lpurl" value="http://resources.netdna.com/EnterpriseMaxCDNFreeTrial_freetrial.html?cr={creative}&kw={keyword}" />
			<input type="hidden" name="formid" value="111" />
			<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
			<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
			<input name="URL_of_Lead_Source__c" type='hidden' value="<?php echo getURL(); ?>" />

			<div class="cols">
				<div class="col">
					<div class="trial-form custom-form">
						<label>First Name <span class="orange-text">*</span></label>
						<input class="text required" type="text" name="FirstName" >
						<label>Last Name <span class="orange-text">*</span></label>
						<input class="text required" type="text" name="LastName" >
						<label>Email Address <span class="orange-text">*</span></label>
						<input class="text required" type="email" name="Email" >
						<label>Phone Number <span class="orange-text">*</span></label>
						<input class="text required" type="text" name="Phone" >
						<label>URL <span class="orange-text">*</span></label>
						<input class="text required" type="text" name="Website" value="http://" data-value="http://" >
						<label>Your Monthly Bandwidth Usage <span class="orange-text">*</span></label>
						<select class="required" name="NetDNA_Usage_Selection__c" tabindex="6">
							<option value="Select Bandwidth" selected="selected">Select Bandwidth</option>
							<option value="Under 5TB">Under 5TB</option>
							<option value="5TB - 10TB">5TB - 10TB</option>
							<option value="11 - 100TB">11 - 100TB</option>
							<option value="101TB - 1,000TB">101TB - 1,000TB</option>
							<option value="1PB+">1PB+</option>
						</select>
					</div>
				</div>
				<div class="col">
					<h3>If we're a fit, you'll enjoy:</h3>
					<ul class="simple-list">
						<li>Competitive global rates</li>
						<li>Fast network, fast provisioning</li>
						<li>Easy to use, but powerful, control panel and API</li>
						<li>39ms average response times, according to Cedexis</li>
						<li>24/7/365 support, even on holidays (yes, even that holiday you're thinking about now)</li>
					</ul>
				</div>
			</div>
			<button type="submit" class="btn btn-submit">Request Free Trial</a>
		</form>
	</div><!-- /popup -->

	<div class="popup" id="popup-test">
		<strong class="orange large-heading">Test MaxCDN against your<br/>current solution for free</strong>
		<p>We will provide you with a third party test ran by Catchpoint; it will measure your current CDN<br/>versus MaxCDN Enterprise from different locations around the world. Once the test is completed, we'll provide a report which shows how they both performed. It can take up to 48</br>hours to send you the report.</p>

		<form id="form-popup-speed-report-<?php echo getPageSlug(); ?>" method="post" enctype="application/x-www-form-urlencoded" action="http://resources.netdna.com/index.php/leadCapture/save" class="standard-form">
			<input type="hidden" name="lpId" value="-1" />
			<input type="hidden" name="subId" value="127" />
			<input type="hidden" name="kw" value="" />
			<input type="hidden" name="cr" value="" />
			<input type="hidden" name="searchstr" value="" />
			<input type="hidden" name="_mkt_disp" value="return" />
			<input type="hidden" name="_mkt_trk" value="" />
			<input name="content__c" type='text' value="" class="hidden" />
			<input name="LeadSource" type="hidden" value="MaxCDN.com">
			<input name="Lead_Source_Detail__c" type="hidden" value="MaxCDN Testing Form">
			<input type="hidden" name="lpurl" value="http://resources.netdna.com/Testing_MaxCDNContactUs.html?cr={creative}&kw={keyword}" />
			<input type="hidden" name="formid" value="109" />
			<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
			<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
			<input name="URL_of_Lead_Source__c" type='hidden' value="<?php echo getURL(); ?>" />

			<div class="cols">
				<div class="col">
					<div class="trial-form custom-form">
						<label>Email Address <span class="orange-text">*</span></label>
						<input class="text required" type="email" name="Email" >
						<label>Phone Number (optional)</label>
						<input class="text " type="text" name="Phone" >
						<label>URL of a file (2mb or under) <span class="orange-text">*</span></label>
						<input class="text required" type="text" name="Website" placeholder="http://your-company.com/file.pdf">
						<label>Your Monthly Bandwidth Usage <span class="orange-text">*</span></label>
						<select class="required" name="NetDNA_Usage_Selection__c" tabindex="6">
							<option value="Select Bandwidth" selected="selected">Select Bandwidth</option>
							<option value="Under 5TB">Under 5TB</option>
							<option value="5TB - 10TB">5TB - 10TB</option>
							<option value="11 - 100TB">11 - 100TB</option>
							<option value="101TB - 1,000TB">101TB - 1,000TB</option>
							<option value="1PB+">1PB+</option>
						</select>
					</div>
				</div>
				<div class="col">
					<h3>How will this test help you?</h3>
					<ul class="simple-list">
						<li><strong>You get real data</strong>, from a 3rd party (Catchpoint), to help drive your decisions.</li>
					</ul>
				</div>
			</div>
			<button type="submit" class="btn btn-submit">Get Your Speed Report</a>
		</form>
	</div><!-- /popup -->

	<div class="popup" id="popup-generalcontact">
		<strong class="orange large-heading">Contact Us</strong>
		<p>If you have any technical or pricing questions about MaxCDN Enterprise, we can answer them.<br/>If you leave your details below, we'll contact you back with more information.<br/>Otherwise, you can <a href="#" onclick="return startWidget('chat');">live chat</a> us or call us at <span class="phone-number">(877) 629-2361</span>.</p>

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
					<label>Your Monthly Bandwidth Usage <span class="orange-text">*</span></label>
					<select class="required" name="NetDNA_Usage_Selection__c" tabindex="6">
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
			<button type="submit" class="btn btn-submit">Submit</a>
		</form>
	</div><!-- /popup -->
</div>

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
				return SnapABug.startLink();
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

<script type="text/javascript">
var _mfq = _mfq || [];
(function() {
	var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
	mf.src = "//cdn.mouseflow.com/projects/0871b593-6288-4f18-a9b1-88d1d6802d1e.js";
	document.getElementsByTagName("head")[0].appendChild(mf);
})();
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

<?php if ($_SERVER['SCRIPT_NAME'] === '/success/index.php' || $_SERVER['SCRIPT_NAME'] === '/trial-success/index.php'): ?>
<!-- Google Code for NetDNA Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1050851085;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "N58sCKHivgUQje6K9QM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1050851085/?value=0&amp;label=N58sCKHivgUQje6K9QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php endif; ?>

</body>
</html>