<?php
// etag support
// lame, but works... haha
$lastModified=filemtime(__FILE__);
$etagFile = md5_file(__FILE__);
$ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
$etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
header("Etag: $etagFile");
header('Cache-Control: public');
if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$lastModified || $etagHeader == $etagFile) {
       header("HTTP/1.1 304 Not Modified");
       exit;
}
?>

<?php include('functions.php'); ?>

<?php
$filePrepender = (substr_count($_SERVER['SCRIPT_NAME'], '/') > 1) ? "../" : "";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php
	// set up the page titles
	$title = "Enterprise CDN - Performance and reliability at a third of the cost | MaxCDN";
	$meta_desc = "An enterprise content delivery network with high reliability and performance without the cost. Features not provided by other CDNs. See why we're different.";
	switch($_SERVER['SCRIPT_NAME']) {
		case '/pricing/index.php':
			$title = "Global Flat Rate Pricing by MaxCDN. Prices from 5¢ globally.";
			$meta_desc = "Simple enterprise pricing. Don't pay different prices for different regions. Pay one  global flat rate for the entire world. And still get enterprise reliability and performance.";
			break;
		case '/success/index.php':
			$title = "MaxCDN Enterprise - Thank You!";
			break;
	}


	// don't index these pages
	if ($_SERVER['SCRIPT_NAME'] === '/success/index.php' || $_SERVER['SCRIPT_NAME'] === 'high-volume-cdn.php') {
		echo '<meta name="robots" content="noindex,nofollow" />';
	}
	?>
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $meta_desc; ?>"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $filePrepender; ?>css/styles.css?q=<?=getMD5Hash('css/styles.css')?>" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $filePrepender; ?>css/jquery.fancybox.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $filePrepender; ?>css/form.css" media="all">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="prefetch" href="https://enterprise.maxcdn.com/pricing/" />
	<!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="js/PIE.js"></script>
		<link rel="stylesheet" type="text/css" href="css/ie.css" media="all">
	<![endif]-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-11020602-7', 'maxcdn.com');
	  ga('send', 'pageview');
	</script>

	<script type="text/javascript">var _kmq = _kmq || [];
		  var _kmk = _kmk || '8521c9125b22f8dc648d1abbb95e84667d89841e';
		  function _kms(u){
		    setTimeout(function(){
		      var d = document, f = d.getElementsByTagName('script')[0],
		      s = d.createElement('script');
		      s.type = 'text/javascript'; s.async = true; s.src = u;
		      f.parentNode.insertBefore(s, f);
		    }, 1);
		  }
		  _kms('//i.kissmetrics.com/i.js');
		  _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
	</script>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//cdn.optimizely.com/js/140761619.js"></script>
</head>
<body>
<header>
	<div class="top" style="box-shadow:none;">
		<div class="container-width aligncenter">
			<div class="container-padding">
				<a href="http://www.maxcdn.com/" class="image maxcdn-colored-logo alignleft"></a>
				<ul class="alignright nav">
					<li><a id="topnavcontactus" style="padding: 9px 10px; margin-top: 2px;" class="fancybox small-box" href="#popup-generalcontact"><strong><span class="phone-number">+1 (877) 629-2361</span></strong></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</header>

<div class="top-area">
		<div class="block">
			<div class="tbl-cell">
				<div class="tbl-in">
					<strong class="ttl">High Volume and Performance CDN Without The Cost.</strong>
					<ul class="simple-list green">
						<li>SSL options at less than half the price of our closest competitor</li><br/>
						<li>Simple intuitive control panel &amp; 24/7 support, 365 days a year</li><br/>
						<li>World-wide flat price — no extra fee for SSL traffic</li>
					</ul>
					<a id="mainbtntryusfree" href="#" class="btn btn-test">Try Us For Free</a>
					<p class="belowbtn">or see <a href="#pricing">enterprise pricing</a></p>
				</div>
			</div>
		</div><!-- /block -->
	</div><!-- /top-area -->
	<div class="main main-area" id="reliability">
		<div class="clients">
			<span class="str">CURRENT CLIENTS</span>
			<ul>
				<li>
					<span><div class="image kixeye"></div></span>
				</li>
				<li>
					<span><div class="image thenextweb"></div></span>
				</li>
				<li>
					<span><div class="image stumbleupon"></div></span>
				</li>
				<li>
					<span><div class="image jquery"></div></span>
				</li>
				<li>
					<span><div class="image nissan"></div></span>
				</li>
			</ul>
		</div><!-- /clients -->
		<div class="main-holder">
			<article class="content">
				<h1 class="heading">The Speed and Features You Need</h1>
				<p>We are one of the fastest CDNs in the industry, but speed is nothing without control.<br/>We offer on-demand purging (cache invalidation) and provisioning, a fully documented and supported API and a robust suite of security features. We stand behind our CDN with<br/>24/7/365 support while offering competitive bandwidth pricing.</p>
				<strong class="large-heading orange">Reliability</strong>
				<h2 class="heading">100% SLA</h2>
				<p>Our redundant infrastructure and network are so reliable, we provide a 100% SLA to every enterprise client &mdash; for example, we use multiple upstream and DNS providers.</p>
				<h2 class="heading">Low Error Rates</h2>
				<p>We make sure your content is delivered using an Anycast network with Dyn and DNS Made Easy<br/>that minimizes packet loss. Packet loss means a slower connection. Slower connections means lost conversions and unhappy customers and users. Our error rates are among the lowest in the industry, according to Cedexis.</p>
			</article>
			<aside id="sidebar">
				<ul class="side-menu">
					<li><a href="#reliability">RELIABILITY<span class="ico ico-2">&nbsp;</span></a></li>
					<li><a href="#performance">PERFORMANCE<span class="ico">&nbsp;</span></a></li>
					<li><a href="#features">FEATURES<span class="ico ico-3">&nbsp;</span></a></li>
					<li><a href="#security">SECURITY<span class="ico ico-4">&nbsp;</span></a></li>
					<li><a href="#support">SUPPORT<span class="ico ico-5">&nbsp;</span></a></li>
					<li><a href="#pricing">PRICING<span class="ico ico-6">&nbsp;</span></a></li>
				</ul>
				<a href="#" class="btn-chat" onclick="return startWidget('chat');">chat online</a>
				<p class="sidebar-phone textcenter"><strong>or give us a call at:<br/></strong><span class="phone-number">+1 (877) 629-2361</span>
			</aside>
		</div><!-- /main-holder -->
	</div><!-- /main -->
	<div class="testimonial">
		<div class="holder">
			<blockquote>
				<q>MaxCDN is serving all images and JavaScripts for our site. Because of the amount of transactions going through our site, uptime of 100% is a requirement. MaxCDN has delivered.</q>
				<cite><img class="photo ie-fix" src="images/img-06.jpg" alt="image description" width="64" height="64" >David Braun | CEO, TEMPLATEMONSTER</cite>
			</blockquote>
		</div>
	</div><!-- /testimonials -->
	<div class="main">
		<article class="content">
			<div class="perfomance-info" id="performance">
				<h2 class="orange large-heading">Performance</h2>
				<p>Our servers feature Nginx &mdash; known for its high performance, stability, rich feature set, simple configuration, and low resource consumption &mdash; and 100% SSDs in North America, Europe and Asia, connected to the internet with multiple 10 Gigabit ports.</p>
				<p>Our redundant upstream providers includes GTT and Zayo; our 600 peering partners cover 90 countries and include AT&amp;T, Level 3, Time-Warner Cable, Cox, Comcast, Vodaphone and Rogers, among many others. Our response time consistently come in at about 39ms according to Cedexis &mdash; but don't take our word for it. Use your own tools to test our speed. We know you'll be pleasantly surprised.</p>
			</div><!-- /perfomance-info -->
			<div class="tab-area" id="tabs-1">
				<ul class="tabset">
					<li><a href="#tab-1-1" class="ie-fix">Network Map</a></li>
					<li><a href="#tab-1-2" class="ie-fix">Peering Partners</a></li>
				</ul>
				<div class="tab-content" id="tab-1-1">
					<div class="img">
						<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
						<script type="text/javascript" src="https://cdn-assets.netdna.com/maps/google-maps-marker.js"></script>
						<script type="text/javascript" src="https://cdn-assets.netdna.com/maps/maps.js"></script>
						<div id="map_canvas" style="width: 100%; height: 242px;"></div> 
						<div class="image datacenter-partners"></div>
						<script type="text/javascript">
						var map = new NetDNA_Map({
						  //options
						  zoomLevel: 1,					//default & minimum zoom level
						  centerX: 13.507321974039545,	//center of the map, in X coordinates
						  centerY: 12.815115574218696,	//center of the map, in Y coordinates
						  containerID: 'map_canvas',	//div element to inject map in. MUST be an ID
						  lockView: false,				//whether to disable all controls, panning, etc
						  scrollwheel: false			//whether to disable all controls, panning, etc
						});
						</script>
					</div>
					<ul class="logos logos-2">
						<li>
							<img src="images/datacenter-partners.png">
						</li>
					</ul>
				</div>
				<div class="tab-content" id="tab-1-2">
					<div class="img"><img src="images/img-07.jpg" alt="image description" width="687" height="242" ></div>
					<ul class="logos">
						<li>
							<img src="images/peering-partners.png">
						</li>
					</ul>
				</div>
			</div><!-- /tab-area -->

			<h2 class="orange large-heading">Features</h2>
			<p>In the slider below there is: instant provisioning, instant purge,<br/>SSD based network, powerful restful API and custom SSL.</p>
		</article>
	</div><!-- /main -->

	<div class="carousel" id="features">
		<div class="holder">
			<div class="wrap" id="carousel-holder">
				<div class="slide slide-prev">
					<div class="img"><img src="images/img-32.png" alt="image description"></div>
					<strong class="name">SSD-Based Network</strong>
					<p>A 15,000 RPM SATA drive can perform between 175 to 210 IOPS a second. Our solid state Intel drives can perform between 5,000 to 8,500 IOPS a second, or up to 48x faster than a legacy drive.</p>
				</div>
				<div class="slide slide-current">
					<div class="img"><img src="images/img-31.png" alt="image description" ></div>
					<strong class="name">Custom SSL</strong>
					<p>Custom SSLs are a pain for traditional CDNs, taking up to a week and requiring an engineer. Our installation takes seconds &mdash; upload a certificate through the control panel or API, with no engineer required.</p>
				</div>
				<div class="slide slide-next">
					<div class="img"><img src="images/img-29.png" alt="image description" ></div>
					<strong class="name">Instant Provisioning</strong>
					<p>If you're waiting half an hour &mdash; or more &mdash; to provision your zone, talk to us. We'll have you up and running in minutes.</p>
				</div>
				<div class="slide" style="display:none;">
					<div class="img"><img src="images/img-30.png" alt="image description" ></div>
					<strong class="name">Powerful REST API</strong>
					<p>Our REST API is fully documented and fully featured &mdash;  because it was built for us, by us. When you have questions, we have answers.</p>
				</div>
				<div class="slide" style="display:none;">
					<div class="img"><img src="images/img-28.png" alt="image description"></div>
					<strong class="name">Instant Purge</strong>
					<p>Traditional CDNs find it acceptable to purge your cache in half an hour&mdash; we don't. Your cache will be purged in 30 seconds or less with us.</p>
				</div>
				<a href="#" class="btn-next">prev</a>
				<a href="#" class="btn-prev">next</a>
			</div>
		</div>
	</div><!-- /carousel -->

	<div class="testimonial testimonial-2">
		<div class="holder">
			<blockquote>
				<q>MaxCDN is all about speed and efficiency, and helped us craft a new approach to our ad delivery methods. This approach has already lead BuySellAds to being nearly twice as fast. I would recommend them.</q>
				<cite><img class="photo ie-fix" src="images/img-27.jpg" alt="image description" width="64" height="64" >Todd Garland | CEO, BUYSELLADS</cite>
			</blockquote>
		</div>
	</div><!-- /testimonials -->

	<div class="main">
		<article class="content">
			<blockquote class="testimonial-block" id="security">
				<q>"Security Is Not a Product; It's a Process."</q>
				<cite><strong>Bruce Schneier</strong> | Cryptographer</cite>
			</blockquote>
			<h2 class="orange large-heading">Security</h2>
			<p>Being able to secure your website is as important as its design and content. Having a fast website doesn't mean you should compromise your security. We make sure that your website is fast, but that it's also secure using industry-leading encryption standards.</p>
			<ul class="option-list">
				<li>
					<span class="ico">&nbsp;</span>
					<strong class="name">EdgeSecurity</strong>
					<p>We generate secure tokens without the wait, and we deploy them to your users with the same speed using this turnkey solution. Control who sees and who can download your content with digital protection and time sensitive links.</p>
				</li>
				<li>
					<span class="ico ico-2">&nbsp;</span>
					<strong class="name">Two Step Authorization</strong>
					<p>Protect your users with passwords, as well as a random code that changes every minute. We tie it to customer smartphones using Google Authenticator, which is available for all major smartphone platforms.</p>
				</li>
				<li>
					<span class="ico ico-3">&nbsp;</span>
					<strong class="name">EdgeSSL</strong>
					<p>Our SSL certificates take seconds to provision and they use our optimized TCP stack, ciphers and hardware. The certificates utilize Intel Integrated Performance Primitives (IPP), which are delivered via our network of edge servers, and boost SSL performance by 35 percent. We can support your existing certificates, and/or provision you a new certificate with one click.</p>
				</li>
				<li>
					<span class="ico ico-4">&nbsp;</span>
					<strong class="name">Extended API Security</strong>
					<p>We go beyond OAuth authentication, offering our customers whitelisting by IP address, or CIDR blocks. We can also set application permissions and limit access to reporting data, purging privileges and utilizing zone management.</p>
				</li>
			</ul>
		</article>
	</div><!-- /main -->
	<div class="team-area">
		<div class="holder">
			<img src="images/img-33.png" alt="image description" width="686" height="189" >
		</div>
	</div><!-- /team-area -->
	<div class="support-info">
		<div class="main">
			<section class="content small">Not models. Actual team members.</section>
			<article class="content" id="support">
				<strong class="large-heading orange">Support</strong>
				<h2 class="heading">Engineer Access</h2>
				<p>We're sure the tech support you and your team needs is something beyond rebooting your laptop or turning it off and on. You'll have access to one of our engineers &mdash; not a level one rep reading from a script &mdash; who'll work with you to ensure your service works flawlessly with our CDN.</p>
				<h2 class="heading">Dedicated Account Rep</h2>
				<p>Never play phone tag again with a faceless, anonymous billing or accounts department. You'll be serviced by a single representative who knows your account and who will give you the personal service you deserve. You'll have access to them via their mobile number, Skype and GTalk.</p>
				<h2 class="heading">24/7 Support</h2>
				<p>As an enterprise client, we include 24/7/365 priority support. You'll have direct access to our top-tier support at any time. An emergency email address and phone number will be provided and will always be monitored. That includes Thanksgiving, Christmas, New Year's Eve, New Year's, The Fourth of July...no fine print, no asterisks.</p>
			</article>
		</div>
	</div><!-- /support-info -->
	<div class="main">
		<article class="content" id="pricing">
			<strong class="large-heading orange">Pricing</strong>
			<h2 class="heading">One World. One Rate.</h2>
			<div class="data">
				<span class="decor-r ie-fix"></span>
				<?php include('snippets/pricing-table.php'); ?>
				<section class="content small">Starting at $800/month. A setup fee may apply.</section>
			</div><!-- /data -->
			<br>
			<h2 class="heading">No HTTP Request Charges. Ever.</h2>
			<p>While it's easy to charge for requests, we're a content delivery network, not a request delivery network. We won't charge for requests, ever. I bet you thought you were going to have to read a bunch of qualifiers here, didn't you?</p>
			<div class="img-block"><img src="images/img-34.png" alt="image description" width="629" height="234" ></div>


			<!-- Free Trial section -->
			<div class="free-trial footer-freetrial textleft">
				<div class="column fourty first">
					<h2 class="no-bottom-space"><strong>GET A 7 DAY FREE TRIAL</strong></h2>
					<p class="copy">Check out our content delivery network and try out the new features that matter to you the most with our 7 day free trial.</p>
					<ul class="simple-list" >
						<li>Low global flat rate pricing</li>
						<li>Features other CDNs don’t offer</li>
						<li>Easiest to use control panel</li>
						<li>24/7 superior support</li>
						<li>High performance</li>
					</ul>				
				</div>
				<div class="column sixty last">
					<form id="form-free-trial-<?php echo getPageSlug(); ?>" method="post" enctype="application/x-www-form-urlencoded" action="http://resources.netdna.com/index.php/leadCapture/save" class="alignright standard-form">
						<input type="hidden" name="lpId" value="-1" />
						<input type="hidden" name="subId" value="127" />
						<input type="hidden" name="kw" value="" />
						<input type="hidden" name="cr" value="" />
						<input type="hidden" name="searchstr" value="" />
						<input type="hidden" name="_mkt_disp" value="return" />
						<input type="hidden" name="_mkt_trk" value="" />
						<input name="content__c" type='text' value="" class="hidden" />
						<input name="LeadSource" type="hidden" value="MaxCDN.com">
						<input name="Lead_Source_Detail__c" type="hidden" value="MaxCDN Contact Us Form">
						<input type="hidden" name="lpurl" value="http://resources.netdna.com/MaxCDNContactUs.html?cr={creative}&kw={keyword}" />
						<input type="hidden" name="formid" value="15" />
						<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
						<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
						<input name="URL_of_Lead_Source__c" type='hidden' value="https://enterprise.maxcdn.com/" />

						<div class="trial-form custom-form">
							<label>Email Address</label>
							<input class="text required" type="email" name="Email" >
							<label>Phone Number (optional)</label>
							<input class="text " type="text" name="Phone" >
							<label>URL of a file (2mb or under)</label>
							<input class="text required" type="text" name="Website" placeholder="http://your-company.com/file.pdf">
							<label>Your Monthly Bandwidth Usage</label>
							<select class="required" name="NetDNA_Usage_Selection__c" tabindex="6">
								<option value="Select Bandwidth" selected="selected">Select Bandwidth</option>
								<option value="Under 5TB">Under 5TB</option>
								<option value="5TB - 10TB">5TB - 10TB</option>
								<option value="11 - 100TB">11 - 100TB</option>
								<option value="101TB - 1,000TB">101TB - 1,000TB</option>
								<option value="1PB+">1PB+</option>
							</select>
						</div>
						<button type="submit" class="btn btn-submit">Request Free Trial</a>
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
					<div class="container-padding">
    <div class="live-chat info">
        <h2 class="heading">Have questions?</h2>
        <p>Need to find answers quick? We’re here to help.</p>        
        <a href="#" onclick="return startWidget('chat');" class="chbtn">
            <i class="fa fa-comment"></i>
            <div class="chbtn-chat">Start a Live Chat</div>
        </a>
		<p>or call us +1 (877) 629-2361</p>
    </div>
</div><br/>
		</article>
		<div class="clearfix"></div>
		
	</div><!-- /main -->

<?php
$filePrepender = (substr_count($_SERVER['SCRIPT_NAME'], '/') > 1) ? "../" : "";
?>

<footer>
	<a href="#" onclick="return startWidget('chat');" class="chat-now"><img usemap="#image-maps" src="<?php echo $filePrepender; ?>images/chatimage.gif"/></a>
    <map id="image-maps" name="image-maps">
<area  shape="rect" coords="413,15,447,43" alt="" title="" target="_self" href="JavaScript:  $('.chat-now').fadeOut(400);" />
</map>
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
	var seAgent;
	(function() {
		var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
		se.src = '//commondatastorage.googleapis.com/code.snapengage.com/js/5c293324-896b-4816-ad45-6fd7f39fa366.js';
		var done = false;
		var chatMsgCounter = 0;

		se.onload = se.onreadystatechange = function() {
			if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
				done = true;

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

<?php if ($_SERVER['SCRIPT_NAME'] === '/success/index.php'): ?>
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