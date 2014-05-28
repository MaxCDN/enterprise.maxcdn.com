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

<!-- begin olark code
            <script data-cfasync="false" type='text/javascript'>

                // Custom Variables //

                googleUTMSources();

                if (typeof $.cookie('custom_utm_source') !== "undefined") {
                    lc_utm_source = $.cookie('custom_utm_source');
                }

                if (typeof $.cookie('custom_utm_campaign') !== "undefined") {
                    lc_utm_campaign = $.cookie('custom_utm_campaign');
                }

                if (typeof $.cookie('custom_utm_term') !== "undefined") {
                    lc_utm_term = $.cookie('custom_utm_term');
                }

                if (typeof $.cookie('custom_utm_content') !== "undefined") {
                    lc_utm_content = $.cookie('custom_utm_content');
                }

                if (typeof $.cookie('custom_utm_medium') !== "undefined") {
                    lc_utm_medium = $.cookie('custom_utm_medium');
                }

                if (typeof $.cookie('first_visit') !== "undefined") {
                    lc_first_visit = $.cookie('first_visit');
                }

                var kmCookie = $.cookie('km_ai');


                /*<![CDATA[*/
                window.olark || (function (c) {
                    var f = window,
                        d = document,
                        l = f.location.protocol == "https:" ? "https:" : "http:",
                        z = c.name,
                        r = "load";
                    var nt = function () {
                        f[z] = function () {
                            (a.s = a.s || []).push(arguments)
                        };
                        var a = f[z]._ = {}, q = c.methods.length;
                        while (q--) {
                            (function (n) {
                                f[z][n] = function () {
                                    f[z]("call", n, arguments)
                                }
                            })(c.methods[q])
                        }
                        a.l = c.loader;
                        a.i = nt;
                        a.p = {
                            0: +new Date
                        };
                        a.P = function (u) {
                            a.p[u] = new Date - a.p[0]
                        };

                        function s() {
                            a.P(r);
                            f[z](r)
                        }
                        f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
                        var ld = function () {
                            function p(hd) {
                                hd = "head";
                                return ["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
                            }
                            var i = "body",
                                m = d[i];
                            if (!m) {
                                return setTimeout(ld, 100)
                            }
                            a.P(1);
                            var j = "appendChild",
                                h = "createElement",
                                k = "src",
                                n = d[h]("div"),
                                v = n[j](d[h](z)),
                                b = d[h]("iframe"),
                                g = "document",
                                e = "domain",
                                o;
                            n.style.display = "none";
                            m.insertBefore(n, m.firstChild).id = z;
                            b.frameBorder = "0";
                            b.id = z + "-loader";
                            if (/MSIE[ ]+6/.test(navigator.userAgent)) {
                                b.src = "javascript:false"
                            }
                            b.allowTransparency = "true";
                            v[j](b);
                            try {
                                b.contentWindow[g].open()
                            } catch (w) {
                                c[e] = d[e];
                                o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
                                b[k] = o + "void(0);"
                            }
                            try {
                                var t = b.contentWindow[g];
                                t.write(p());
                                t.close()
                            } catch (x) {
                                b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
                            }
                            a.P(2)
                        };
                        ld()
                    };
                    nt()
                })({
                    loader: "static.olark.com/jsclient/loader0.js",
                    name: "olark",
                    methods: ["configure", "extend", "declare", "identify"]
                });
                /* custom configuration goes here (www.olark.com/documentation) */

                olark('api.chat.onBeginConversation', function() {
                                        setTimeout(function(){
                                            olark('api.visitor.getDetails', function(details) {
                                                lc_test = 'test';
                                                lc_user_city = details.city;
                                                lc_user_state = details.region;
                                                lc_user_country = details.country;
                                                lc_user_startpage = details.conversationBeginPage;
                                                olark('api.visitor.updateCustomFields', {
                                                    'City': lc_user_city,
                                                    'State/Province': lc_user_state,
                                                    'Country': lc_user_country,
                                                    'Live-Chat Page URL': lc_user_startpage
                                                });
                                            });
                                        }, 300);
                                    });

                olark('api.visitor.updateCustomFields', {
                    'Lead Source': 'Live-Chat',
                    'Status': 'Cold Leads',
                    'Live-Chat Type': 'Olark Live Chat',
                    'Lead System': 'Salesforce'
                });

                 if(typeof lc_utm_content !== 'undefined') {
                    olark('api.visitor.updateCustomFields', {
                        'utm_content': lc_utm_content
                    });
                }

                if(typeof lc_utm_campaign !== 'undefined') {
                    olark('api.visitor.updateCustomFields', {
                        'utm_campaign': lc_utm_campaign
                    });
                }

                if(typeof lc_utm_term !== 'undefined') {
                    olark('api.visitor.updateCustomFields', {
                        'utm_term': lc_utm_term
                    });
                }

                if(typeof lc_utm_medium !== 'undefined') {
                    olark('api.visitor.updateCustomFields', {
                        'utm_medium': lc_utm_medium
                    });
                }

                if(typeof lc_utm_source !== 'undefined') {
                    olark('api.visitor.updateCustomFields', {
                        'utm_source': lc_utm_source
                    });
                }

                if(typeof lc_first_visit !== 'undefined') {
                    olark('api.visitor.updateCustomFields', {
                        'PPC Entrance Date': lc_first_visit
                    });
                }

                // Kissmetrics and Google Analytics Tracking

                olark('api.box.onExpand', function() {
                    _gaq.push(['_trackEvent', 'LiveChat', 'Chat Expanded', kmCookie, undefined, true]);
                    _kmq.push(['record', 'Chat Expanded']);
                });

                olark('api.box.onShrink', function() {
                    _gaq.push(['_trackEvent', 'LiveChat', 'Chat Shrunk', kmCookie, undefined, true]);
                    _kmq.push(['record', 'Chat Shrunk']);

                });

                olark('api.chat.onBeginConversation', function() {
                    _gaq.push(['_trackEvent', 'LiveChat', 'Initial Message Sent', kmCookie, undefined, true]);
                    _kmq.push(['record', 'Initial Chat Message Sent']);

                });

                                    // Custom Operator Commands

                                    olark('api.chat.onCommandFromOperator', function(event) {
                                        if(event.command.name == 'pricing') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://maxcdn.com/pricing/'});
                                        }

                                        if(event.command.name == 'hvpricing') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://maxcdn.com/high-volume-pricing/'});
                                        }

                                        if(event.command.name == 'entpricing') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://maxcdn.com/enterprise-pricing/'});
                                        }

                                        if(event.command.name == 'w3tc') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/wordpress-w3-total-cache/'});
                                        }

                                        if(event.command.name == 'wpsc') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/wordpress-wp-super-cache/'});
                                        }

                                        if(event.command.name == 'customint') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/custom-integration/'});
                                        }

                                        if(event.command.name == 'czpull') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/create-a-pull-zone/'});
                                        }

                                        if(event.command.name == 'czpush') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/create-a-push-zone/'});
                                        }

                                        if(event.command.name == 'purge') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/purge-cache-on-cdn/'});
                                        }

                                        if(event.command.name == 'cname') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/tutorials/create-cname/'});
                                        }

                                        if(event.command.name == 'webfonts') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/use-cdn-with-webfonts/'});
                                        }

                                        if(event.command.name == 'magento') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/magento-cdn/'});
                                        }

                                        if(event.command.name == 'joomla') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/joomla-cdn/'});
                                        }

                                        if(event.command.name == 'presta') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/prestashop-cdn/'});
                                        }

                                        if(event.command.name == 'vbulletin') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/vbulletin-cdn/'});
                                        }

                                        if(event.command.name == 'wordpress') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/pullzone/wordpress-cdn/'});
                                        }

                                        if(event.command.name == 'privatessl') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/setup-private-ssl/'});
                                        }

                                        if(event.command.name == 'sharedssl') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/setup-shared-ssl/'});
                                        }

                                        if(event.command.name == 'support') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/'});
                                        }

                                        if(event.command.name == 'delzone') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/delete-a-zone/'});
                                        }

                                        if(event.command.name == 'pullsec') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/pull-zone-security/'});
                                        }

                                        if(event.command.name == 'pushsec') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/push-zone-security/'});
                                        }

                                        if(event.command.name == 'connectpush') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/connect-to-push-zone/'});
                                        }

                                        if(event.command.name == 'connectvod') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/connect-to-vod-zone/'});
                                        }

                                        if(event.command.name == 'pullfaq') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/faq/pullzone/'});
                                        }

                                        if(event.command.name == 'pushfaq') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/faq/pushzone/'});
                                        }

                                        if(event.command.name == 'vodfaq') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/faq/vodzone/'});
                                        }

                                        if(event.command.name == 'apikey') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/tutorials/create-an-api-idkey-pair/'});
                                        }

                                        if(event.command.name == 'api') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://docs.maxcdn.com/'});
                                        }

                                        if(event.command.name == 'htaccess') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/tutorials/htaccess-examples/'});
                                        }

                                        if(event.command.name == 'seo') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/use-seo-with-cdn/'});
                                        }

                                        if(event.command.name == 'cloudflare') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/howto/use-cdn-with-cloudflare/'});
                                        }

                                        if(event.command.name == '502') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/debugging/502-bad-gateway/'});
                                        }

                                        if(event.command.name == '403') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://support.maxcdn.com/debugging/403-forbidden/'});
                                        }

                                        if(event.command.name == 'tools') {
                                            olark('api.chat.sendMessageToVisitor', { body: 'http://tools.maxcdn.com'});
                                        }


                                    });

            olark('api.chat.onCommandFromOperator', function(event){
                if (event.command.name == 'end' && event.command.nickname == 'Brenda Benosas') {
                    olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Brenda. Just click here to provide feedback - https://www.nicereply.com/netdna/brenda-benosas'});
                }
                else if (event.command.name == 'end' && event.command.nickname == 'Geno Romualdo') {
                 olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Geno. Just click here to provide feedback - https://www.nicereply.com/netdna/geno-remualdo'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Howard Guevarra') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Howard. Just click here to provide feedback - https://www.nicereply.com/netdna/howard-guevarra/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Ivan Dabic') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Ivan. Just click here to provide feedback - https://www.nicereply.com/netdna/ivan-dabic/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Ivan Bukvic') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Ivan. Just click here to provide feedback - https://www.nicereply.com/netdna/ivan-bukvic/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Aldrin Nollase') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Aldrin. Just click here to provide feedback - https://www.nicereply.com/netdna/aldrin-nollase/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Paul-Vincent Manansala') {
                    olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Paul-Vincent. Just click here to provide feedback - https://www.nicereply.com/netdna/paul-vincent-mansanala/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Mikko Mendoza') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Mikko. Just click here to provide feedback - https://www.nicereply.com/netdna/mikko-mendoza/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Srdjan Salamunovic') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Srdjan. Just click here to provide feedback - https://www.nicereply.com/netdna/srdjan-salamunovic/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Reinald Ramos') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Reinald. Just click here to provide feedback - https://www.nicereply.com/netdna/reinald-ramos/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Jovan Katic') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Jovan. Just click here to provide feedback - https://www.nicereply.com/netdna/jovan-katic/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Virgil Alcantara') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Virgil. Just click here to provide feedback - https://www.nicereply.com/netdna/virgil-alcantara/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Candy Villar') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Candy. Just click here to provide feedback - https://www.nicereply.com/netdna/candy-villar/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Mitchell Harding') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Mitchell. Just click here to provide feedback - https://www.nicereply.com/netdna/mitchell-harding/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Ivana Tepavcevic') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Ivana. Just click here to provide feedback - https://www.nicereply.com/netdna/ivana-tepavcevic/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Hossein Jafari') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Hossein. Just click here to provide feedback - https://www.nicereply.com/netdna/hossein-jafari'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Milos Smiljanic') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Milos. Just click here to provide feedback - https://www.nicereply.com/netdna/milos-smiljanic'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Nicholas Ferreira') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Nick. Just click here to provide feedback - https://www.nicereply.com/netdna/nick-ferreira/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Fred Madarshahian') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Fred. Just click here to provide feedback - https://www.nicereply.com/netdna/fred-madarshahian/'});
                }
                if (event.command.name == 'end' && event.command.nickname == 'Ameer Ghanie') {
                     olark('api.chat.sendMessageToVisitor', { body: 'Thanks for chatting with Ameer. Just click here to provide feedback - https://www.nicereply.com/netdna/ameer-ghanie/'});
                }
            })



                olark.identify('1118-420-10-9501'); /*]]>*/

            function startWidget(chatType) {
                olark('api.box.expand');
            }
            </script>
        <noscript><a href="https://www.olark.com/site/1118-420-10-9501/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
        <!-- end olark code -->

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

<!-- Google Analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11020602-7', 'maxcdn.com');
  ga('send', 'pageview');

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