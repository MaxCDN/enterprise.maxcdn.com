<?php include('../minheader.php'); ?>
<?php include('../minnav.php'); ?>

<div class="enterprise-lp-content">
	<div class="small-width">
		<h2 class="enterprise-lp-headline">Why do CDN Companies Charge Different Prices for Different Countries?</h2>
	</div>
	
	<div class="lp-main-row row clearfix">
		<div class="small-width">
			<div class="left column">
				<p class="lp-information">You shouldn't have to! This is why at MaxCDN we offer you one low rate. Just one price for the entire world.</p>
				<p class="lp-information bottom-paragraph">Why MaxCDN?</p>
				<ul id="lp-intro-list">
					<li>Strong performance due to strategically located data centers and locations that provide 1 hop access to over 90 countries.</li>
					<li>High reliability due to a 100% SLA and lowest error rates in the industry.</li>
					<li>Unmatched security such as two-step authentication, IP whitelisting, user management and more.</li>
					<li>24/7 Support with your dedicated account rep and engineer access.</li>
					<li>SSL options at less than half the price of our closest competitor.</li>
					<li>An easy to use control panel that gives you the control to do anything you need to do without requesting support.</li>
					<li>Simple pricing, one low flat rate and no charges for HTTP/HTTPS requests.</li>
				</ul>
			</div>
			
			<div class="right column">
				<aside class="enterprise-lp-form" id="form-sidebar">
					<h3 class="lp-section-title">Get a Free Trial</h3>
					<p class="trial-information">If you use over 15TB a month you can get a free trial. Sign up below.</p>
					<form class="initial-value-form" method="post" enctype="application/x-www-form-urlencoded" action="http://resources.netdna.com/index.php/leadCapture/save">
						<input name="LeadSource" type="hidden" value="MaxCDN.com">
						<input name="Lead_Source_Detail__c" type="hidden" value="MaxCDN Enterprise Contact Form">
						<input type="hidden" name="lpId" value="-1" />
						<input type="hidden" name="subId" value="127" />
						<input type="hidden" name="kw" value="" />
						<input type="hidden" name="cr" value="" />
						<input type="hidden" name="searchstr" value="" />
						<input name="content__c" type='text' value="" class="hidden" />
						<input type="hidden" name="_mkt_disp" value="return" />
						<input type="hidden" name="_mkt_trk" value="" />
						<input type="hidden" name="lpurl" value="http://resources.netdna.com/EnterpriseMaxCDNShortLandingPageFreeTrial_freetrial.html?cr={creative}&kw={keyword}" />
						<input type="hidden" name="formid" value="119" />
						<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
						<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
						<input name="URL_of_Lead_Source__c" type='hidden' value="<?php echo getURL(); ?>" />
		
						<div class="event-form-field"><label class="hidden-label fnl">FIRST NAME</label><br class="hidden-label fnl" /><span class="orange-text">* </span><input type="text" name="FirstName" value="FIRST NAME" class="required text"></div>
						<div class="event-form-field"><label class="hidden-label lnl">LAST NAME</label><br class="hidden-label lnl" /><span class="orange-text">* </span><input type="text" name="LastName" value="LAST NAME" class="required text"></div>
						<div class="event-form-field"><label class="hidden-label eml">EMAIL</label><br class="hidden-label eml" /><span class="orange-text">* </span><input type="email" name="Email" value="EMAIL" class="required text"></div>
						<div class="event-form-field"><label class="hidden-label pnl">PHONE NUMBER</label><br class="hidden-label pnl" /><input type="phone" name="Phone Number" value="PHONE NUMBER" class="text"></div>
						<div class="event-form-field"><label class="hidden-label wsl">WEBSITE</label><br class="hidden-label wsl" /><span class="orange-text">* </span><input type="url" name="Website" value="WEBSITE" class="required text"></div>
						<div class="event-form-field select-field">
							<span class="orange-text float-right">* </span>
							<select class="required" name="NetDNA_Usage_Selection__c" tabindex="6">
								<option value="Bandwidth" selected="selected">BANDWIDTH</option>
								<option value="Under 5TB">Under 5TB</option>
								<option value="5TB - 10TB">5TB - 10TB</option>
								<option value="11 - 100TB">11 - 100TB</option>
								<option value="101TB - 1,000TB">101TB - 1,000TB</option>
								<option value="1PB+">1PB+</option>
							</select>
						</div>
						<div class="event-form-submit"><div class="submit-button"><button class="orange button" name="rsvp-button" value="submit" type="submit">GET A FREE TRIAL</button></div></div>
						
					</form>
				</aside>
			</div>
		</div>
	</div>
	
	<div class="small-width">
		<div class="left column">			
			<div class="data lp-pricing-table">
				<h3 class="lp-section-title">Simple Flat Rate Pricing</h3>
				<?php include('../snippets/pricing-table.php'); ?>
				<section class="content small">Starting at $800/month. Setup fees apply.</section>
			</div>
					
			<div class="lp-customers">
				<h3 class="lp-section-title">Some of the 15,000+ Companies Using Us</h3>
				<section class="company-holder lp-logo-holder">
					<div class="lp-logo-images">
						<div class="clearfix row" id="row1">
							<div class="lp-logo" id="logo1"></div>
							<div class="lp-logo" id="logo2"></div>
							<div class="lp-logo" id="logo3"></div>
						</div>
						<div class="clearfix row" id="row2">
							<div class="lp-logo" id="logo4"></div>
							<div class="lp-logo" id="logo5"></div>
							<div class="lp-logo" id="logo6"></div>
						</div>
						<div class="clearfix row" id="row3">
							<div class="lp-logo" id="logo7"></div>
							<div class="lp-logo" id="logo8"></div>
							<div class="lp-logo" id="logo9"></div>
						</div>
						<div class="clearfix row" id="row4">
							<div class="lp-logo" id="logo10"></div>
							<div class="lp-logo" id="logo11"></div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="small-width"><p id="lp-pp-holder"><a href="" id="lp-privacy-policy">Privacy Policy</a><p></div>

</div>



<?php include('../minfooter.php'); ?>