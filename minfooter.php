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

<!-- Begin Olark Code -->
            <script data-cfasync="false" type='text/javascript'>
                function startWidget(e){olark("api.box.expand")}googleUTMSources();if(typeof $.cookie("custom_utm_source")!=="undefined"){lc_utm_source=$.cookie("custom_utm_source")}if(typeof $.cookie("custom_utm_campaign")!=="undefined"){lc_utm_campaign=$.cookie("custom_utm_campaign")}if(typeof $.cookie("custom_utm_term")!=="undefined"){lc_utm_term=$.cookie("custom_utm_term")}if(typeof $.cookie("custom_utm_content")!=="undefined"){lc_utm_content=$.cookie("custom_utm_content")}if(typeof $.cookie("custom_utm_medium")!=="undefined"){lc_utm_medium=$.cookie("custom_utm_medium")}if(typeof $.cookie("first_visit")!=="undefined"){lc_first_visit=$.cookie("first_visit")}var kmCookie=$.cookie("km_ai");window.olark||function(e){var t=window,n=document,r=t.location.protocol=="https:"?"https:":"http:",i=e.name,s="load";var o=function(){function h(){u.P(s);t[i](s)}t[i]=function(){(u.s=u.s||[]).push(arguments)};var u=t[i]._={},a=e.methods.length;while(a--){(function(e){t[i][e]=function(){t[i]("call",e,arguments)}})(e.methods[a])}u.l=e.loader;u.i=o;u.p={0:+(new Date)};u.P=function(e){u.p[e]=new Date-u.p[0]};t.addEventListener?t.addEventListener(s,h,false):t.attachEvent("on"+s,h);var p=function(){function t(e){e="head";return["<",e,"></",e,"><",s," onl"+'oad="var d=',y,";d.getElementsByTagName('head')[0].",a,"(d.",f,"('script')).",h,"='",r,"//",u.l,"'",'"',"></",s,">"].join("")}var s="body",o=n[s];if(!o){return setTimeout(p,100)}u.P(1);var a="appendChild",f="createElement",h="src",v=n[f]("div"),m=v[a](n[f](i)),g=n[f]("iframe"),y="document",b="domain",w;v.style.display="none";o.insertBefore(v,o.firstChild).id=i;g.frameBorder="0";g.id=i+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){g.src="javascript:false"}g.allowTransparency="true";m[a](g);try{g.contentWindow[y].open()}catch(E){e[b]=n[b];w="javascript:var d="+y+".open();d.domain='"+n.domain+"';";g[h]=w+"void(0);"}try{var S=g.contentWindow[y];S.write(t());S.close()}catch(x){g[h]=w+'d.write("'+t().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}u.P(2)};p()};o()}({loader:"static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});olark("api.chat.onBeginConversation",function(){setTimeout(function(){olark("api.visitor.getDetails",function(e){lc_test="test";lc_user_city=e.city;lc_user_state=e.region;lc_user_country=e.country;lc_user_startpage=e.conversationBeginPage;olark("api.visitor.updateCustomFields",{City:lc_user_city,"State/Province":lc_user_state,Country:lc_user_country,"Live-Chat Page URL":lc_user_startpage})})},300)});olark("api.visitor.updateCustomFields",{"Lead Source":"Live-Chat",Status:"Cold Leads","Live-Chat Type":"Olark Live Chat","Lead System":"Salesforce"});if(typeof lc_utm_content!=="undefined"){olark("api.visitor.updateCustomFields",{utm_content:lc_utm_content})}if(typeof lc_utm_campaign!=="undefined"){olark("api.visitor.updateCustomFields",{utm_campaign:lc_utm_campaign})}if(typeof lc_utm_term!=="undefined"){olark("api.visitor.updateCustomFields",{utm_term:lc_utm_term})}if(typeof lc_utm_medium!=="undefined"){olark("api.visitor.updateCustomFields",{utm_medium:lc_utm_medium})}if(typeof lc_utm_source!=="undefined"){olark("api.visitor.updateCustomFields",{utm_source:lc_utm_source})}if(typeof lc_first_visit!=="undefined"){olark("api.visitor.updateCustomFields",{"PPC Entrance Date":lc_first_visit})}olark("api.box.onExpand",function(){_gaq.push(["_trackEvent","LiveChat","Chat Expanded",kmCookie,undefined,true]);_kmq.push(["record","Chat Expanded"])});olark("api.box.onShrink",function(){_gaq.push(["_trackEvent","LiveChat","Chat Shrunk",kmCookie,undefined,true]);_kmq.push(["record","Chat Shrunk"])});olark("api.chat.onBeginConversation",function(){_gaq.push(["_trackEvent","LiveChat","Initial Message Sent",kmCookie,undefined,true]);_kmq.push(["record","Initial Chat Message Sent"])});olark("api.chat.onCommandFromOperator",function(e){if(e.command.name=="pricing"){olark("api.chat.sendMessageToVisitor",{body:"http://maxcdn.com/pricing/"})}if(e.command.name=="hvpricing"){olark("api.chat.sendMessageToVisitor",{body:"http://maxcdn.com/high-volume-pricing/"})}if(e.command.name=="entpricing"){olark("api.chat.sendMessageToVisitor",{body:"http://maxcdn.com/enterprise-pricing/"})}if(e.command.name=="w3tc"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/wordpress-w3-total-cache/"})}if(e.command.name=="wpsc"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/wordpress-wp-super-cache/"})}if(e.command.name=="customint"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/custom-integration/"})}if(e.command.name=="czpull"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/create-a-pull-zone/"})}if(e.command.name=="czpush"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/create-a-push-zone/"})}if(e.command.name=="purge"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/purge-cache-on-cdn/"})}if(e.command.name=="cname"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/tutorials/create-cname/"})}if(e.command.name=="webfonts"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/use-cdn-with-webfonts/"})}if(e.command.name=="magento"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/magento-cdn/"})}if(e.command.name=="joomla"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/joomla-cdn/"})}if(e.command.name=="presta"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/prestashop-cdn/"})}if(e.command.name=="vbulletin"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/vbulletin-cdn/"})}if(e.command.name=="wordpress"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/pullzone/wordpress-cdn/"})}if(e.command.name=="privatessl"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/setup-private-ssl/"})}if(e.command.name=="sharedssl"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/setup-shared-ssl/"})}if(e.command.name=="support"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/"})}if(e.command.name=="delzone"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/delete-a-zone/"})}if(e.command.name=="pullsec"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/pull-zone-security/"})}if(e.command.name=="pushsec"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/push-zone-security/"})}if(e.command.name=="connectpush"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/connect-to-push-zone/"})}if(e.command.name=="connectvod"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/connect-to-vod-zone/"})}if(e.command.name=="pullfaq"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/faq/pullzone/"})}if(e.command.name=="pushfaq"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/faq/pushzone/"})}if(e.command.name=="vodfaq"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/faq/vodzone/"})}if(e.command.name=="apikey"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/tutorials/create-an-api-idkey-pair/"})}if(e.command.name=="api"){olark("api.chat.sendMessageToVisitor",{body:"http://docs.maxcdn.com/"})}if(e.command.name=="htaccess"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/tutorials/htaccess-examples/"})}if(e.command.name=="seo"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/use-seo-with-cdn/"})}if(e.command.name=="cloudflare"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/howto/use-cdn-with-cloudflare/"})}if(e.command.name=="502"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/debugging/502-bad-gateway/"})}if(e.command.name=="403"){olark("api.chat.sendMessageToVisitor",{body:"http://support.maxcdn.com/debugging/403-forbidden/"})}if(e.command.name=="tools"){olark("api.chat.sendMessageToVisitor",{body:"http://tools.maxcdn.com"})}});olark("api.chat.onCommandFromOperator",function(e){if(e.command.name=="end"){var t=e.command.nickname;var n=/^(\w+)/gm;var r=t.match(n);var i=r[0];var s=/\s+/g;var o=t.toLowerCase().replace(s,"-");console.log("Thanks for chatting with "+i+". Just click here to provide feedback - https://www.nicereply.com/netdna/"+o)}});olark.identify("1118-420-10-9501");
            </script>
        <noscript><a href="https://www.olark.com/site/1118-420-10-9501/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
    <!-- end olark code -->

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

<!-- Google Analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11020602-7', 'maxcdn.com');
  ga('send', 'pageview');

</script>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/394224.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->



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