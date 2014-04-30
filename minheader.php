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
	<script async src="//13708.tctm.co/t.js"></script>

</head>

<body class="grey-background">

	<!-- Orange right slider -->
	<div class="orange-slider">
		<div class="icons">
			<a id="questionbox-side-chatbutton" href="#chat"><i class="fa fa-comments"></i></a>
			<a id="questionbox-side-phonebutton" href="#phone"><i class="fa fa-phone"></i></a>
			<a id="questionbox-side-emailbutton" href="#email"><i class="fa fa-envelope-o"></i></a>
		</div>
		<div class="text alignleft">QUESTIONS?</div>
	</div>
	<div class="slider-content hidden">
		<div class="slider-chat hidden">
			<h2 class="no-bottom-space textcenter">LIVE CHAT</h2>
			<h3 class="no-top-space no-bottom-space textcenter orange-text">AVAILABLE 24/7</h3>
			<p class="textcenter">We're here to answer your questions. From the simple to the hard. Just ask us!</p>
			<div class="textcenter">
				<a id="questionbox-side-chatnowbutton" href="#" onclick="return startWidget('chat');" class="button orange textcenter">CHAT NOW</a>
			</div>
		</div>
		<div class="slider-phone hidden">
			<h2 class="no-bottom-space textcenter">TALK TO US</h2>
			<h3 class="no-top-space no-bottom-space textcenter orange-text">AVAILABLE 24/7</h3>
			<p class="textcenter">
				Want to speak to someone? We're here 24/7 to answer any questions. Just call!<br/><br/>
				<span class="large"><strong><span class="phone-number">1 (877) 629-2361</span></strong></span>
			</p>
		</div>
		<div class="slider-email hidden">
			<form id="form-contact-orange-slider-<?php echo getPageSlug(); ?>" method="post" enctype="multipart/form-data" action="https://forms.hubspot.com/uploads/form/v2/394224/2e282a6e-b85b-4feb-b58d-01b8925bcc1b" class="standard-form">
				<input name="leadsource" type="hidden" value="MaxCDN.com">
				<input name="lead_source_detail__c" type="hidden" value="Enterprise Sidebar Contact Form">
				<input type="hidden" name="lpId" value="-1" />
				<input type="hidden" name="subId" value="127" />
				<input type="hidden" name="kw" value="" />
				<input type="hidden" name="cr" value="" />
				<input type="hidden" name="searchstr" value="" />
				<input name="content__c" type='text' value="" class="hidden" />
				<input type="hidden" name="_mkt_disp" value="return" />
				<input type="hidden" name="_mkt_trk" value="" />
				<input type="hidden" name="lpurl" value="http://resources.netdna.com/EnterpriseMaxCDNSideBarForm_EnterpriseMaxCDN_MaxCDNContactUs.html?cr={creative}&kw={keyword}" />
				<input type="hidden" name="formid" value="113" />
				<input type="hidden" name="returnURL" value="https://enterprise.maxcdn.com/success/" />
				<input type="hidden" name="retURL" value="https://enterprise.maxcdn.com/success/" />
				<input name="contact_form__c" type='hidden' value="<?php echo getURL(); ?>" />

				<div class="column sixty">
					<div class="padding">
						<h2 class="no-bottom-space">TALK TO US</h2>
						<ul>
							<li>
								<label for="FirstName">First Name <span class="orange-text">*</span></label>
								<input class="required" name="firstname" pattern="^\w+$" type="text" tabindex="1" title="Your first name is required." x-moz-errormessage="Please Enter Your First Name" required>
								<div class="clearfix"></div>
							</li>
							<li>
								<label for="LastName">Last Name <span class="orange-text">*</span></label>
								<input class="required" name="lastname" pattern="^\w+$" type="text" tabindex="2"  title="Your last name is required." x-moz-errormessage="Please Enter Your Last Name" required>
								<div class="clearfix"></div>
							</li>
							<li>
								<label for="Email">Email Address <span class="orange-text">*</span></label>
								<input name="email" class="required" type="email" tabindex="3" title="A valid email address is required." x-moz-errormessage="Please Enter Your Valid Email Address" required>
								<div class="clearfix"></div>
							</li>
							<li>
								<label for="Phone">Phone Number</label>
								<input type="phone" name="phone" />
								<div class="clearfix"></div>
							</li>
							<li>
								<label for="Website">Website <span class="orange-text">*</span></label>
								<input name="website" class="required" type="text" title="Please enter a Valid URL" x-moz-errormessage="Please Enter Your Valid Website URL" tabindex="4" pattern="^(https?:\/\/)?(www\.)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w\.-]*)*\/?$" required>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
				</div>

				<div class="column fourty last">
					<div class="padding">
						<label for="text" class="textarea">How can we help you? <span class="orange-text">*</span></label>
						<textarea class="required" name="contact_form_message__c"></textarea>
						<div class="textright">
							<input id="talkformsend" type="submit" class="button orange" value="SEND" />
						</div>
					</div>
				</div>
			</form>


			<div class="clearfix"></div>
		</div>
	</div>